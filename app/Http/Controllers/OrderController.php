<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\orders;
use App\Models\items;
class OrderController
{
    public function AddOrder($item_id)
    {
        $user_id = Auth::user()->id;
        if (!$user_id) {
            return redirect('/login');
        }
        $data = request()->validate([
            'quantity' => 'required|integer|min:1',
        ]);
        $item = items::find($item_id);
        if (!$item) {
            return redirect('/');
        }
        $quantity = $data['quantity'];
        if ($item->quantity - $quantity < 0) {
            return redirect('/item/'.$item_id)->with('error', 'Quantity is less than 0');
        }
        $item->quantity = $item->quantity - $quantity;
        $item->save();
        $final_price = $item->price * $quantity;
        orders::create([
            'user_id' => $user_id,
            'item_id' => $item_id,
            'name' => $item->name,
            'quantity' => $quantity,
            'price' => $final_price,
            'image' => $item->image,
            'status' => 'pending',
        ]);
        return redirect('/dashboard/order');
    }
    public function RemoveOrder($id)
    {
        try {
            $order = orders::findOrFail($id);
            $item = items::find($order->item_id);
            if ($item) {
                $item->quantity += $order->quantity;
                $item->save();
            }
            $order->delete();
            return redirect()->back()->with('success', 'Order deleted and item quantity updated.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete the order or update item quantity.');
        }
    }
    public function AcceptOrder($order_id){
        $order = orders::find($order_id);
        if(!$order){
            return redirect('/orders');
        }
        $order->status = "success";
        $order->save();
        return redirect('/orders');
    }
    public function CancelOrder($order_id){
        $order = orders::find($order_id);
        if(!$order){
            return redirect('/orders');
        }
        $order->status = "cancel";
        $order->save();
        return redirect('/orders');
    }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\items;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
class FoodController
{
    public function AddFood()
    {
        $item = request()->validate([
            'name' => ['required', 'min:6'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'integer'],
            'type' => ['required', 'not_in:1'],
            'description' => ['required', 'max:300'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        if (request()->hasFile('image') && request()->file('image')->isValid()) {
            $imageName = time() . '_' . rand(1000, 9999) . '.' . request()->file('image')->getClientOriginalExtension();
            $imagePath = request()->file('image')->storeAs('images', $imageName, 'public');
            $item['image'] = $imagePath;
        }
        items::create($item);
        return redirect('/');
    }
    public function RemoveFood($id)
    {
        try {
            $item = items::find($id);
            if (!$item) {
                return response()->json(['message' => 'Item not found'], 404);
            }
            if (Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }
            $item->delete();
            return redirect('/');
        } catch (QueryException $e) {
            return response()->json(['message' => 'Failed to remove item', 'error' => $e->getMessage()], 500);
        }
    }
    public function EditFood($id)
    {
        try {
            $item = items::find($id);
            if (!$item) {
                return response()->json(['message' => 'Item not found'], 404);
            }
            $validatedData = request()->validate([
                'name' => ['required', 'min:6'],
                'price' => ['required', 'numeric'],
                'quantity' => ['required', 'integer'],
                'description' => ['required', 'max:300'],
                'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:100000'],
            ]);
            if (request()->hasFile('image') && request()->file('image')->isValid()) {
                if (Storage::disk('public')->exists($item->image)) {
                    Storage::disk('public')->delete($item->image);
                }
                $imageName = time() . '_' . rand(1000, 9999) . '.' . request()->file('image')->getClientOriginalExtension();
                $imagePath = request()->file('image')->storeAs('images', $imageName, 'public');
                $validatedData['image'] = $imagePath;
            }
            $item->update($validatedData);
            return redirect('/');
        } catch (QueryException $e) {
            return response()->json(['message' => 'Failed to update item', 'error' => $e->getMessage()], 500);
        }
    }
    public function GetItems()
    {
        $items_resturant = items::all();
        if ($items_resturant->isEmpty()) {
            return response()->json(['message' => 'No items found'], 404);
        }
        return response()->json($items_resturant);
    }
}

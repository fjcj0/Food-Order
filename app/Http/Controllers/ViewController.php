<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;
use App\Charts\DashboardChart;
use App\Charts\CircleChart;
use App\Models\User;
use App\Models\orders;
use Illuminate\Support\Facades\Auth;

class ViewController
{
    public function ItemsPage()
    {
        $items_resturant = items::all();
        $data = ['items' => $items_resturant];
        if ($items_resturant->isEmpty()) {
            $data['message'] = 'No items yet';
        }
        return view('resturant.resturant', $data);
    }
    public function ItemPage(int $IdItem)
    {
        if (!Auth::user()) {
            return redirect('/login');
        }
        $item = items::find($IdItem);
        if (!$item) {
            abort(404);
        }
        return view('item.item', ['item' => $item]);
    }
    public function RegisterPage()
    {
        return view('register.register');
    }
    public function LoginPage()
    {
        return view('login.login');
    }
    public function AddFoodPage()
    {
        return view('addfood.addfood');
    }
    public function HomeDashboard()
    {
        if (!Auth::user()) {
            return redirect('/login');
        }
        $chart = new DashboardChart();
        $circleChart = new CircleChart();
        $orders = auth()->user()->orders()->paginate(5);
        $totalorder = $orders->total();
        $sumprice = auth()->user()->orders()->where('status', 'success')->sum('price');
        $ordersDone = auth()->user()->orders()->where('status', 'success')->count();
        $PercentOrderDone = $totalorder > 0 ? round(($ordersDone / $totalorder) * 100, 2) : 0;
        return view('user-dashboard.home-dashboard', compact('chart', 'circleChart', 'orders', 'totalorder', 'sumprice', 'PercentOrderDone'));
    }
    public function OrderDashboard()
    {
        if (!Auth::user()) {
            return redirect('/login');
        }
        $orders = auth()->user()->orders()->where('status', 'pending')->get();
        return view('user-dashboard.order-dashboard', ['orders' => $orders]);
    }
    public function ProductDashboard()
    {
        if (!Auth::user()) {
            return redirect('/login');
        }
        $items_resturant = items::paginate(6);
        $data = ['items' => $items_resturant];
        if ($items_resturant->isEmpty()) {
            $data['message'] = 'No items yet';
        }
        return view('user-dashboard.product-dashboard', $data);
    }
    public function SettingDashboard()
    {
        if (!Auth::user()) {
            return redirect('/login');
        }
        return view('user-dashboard.setting-dashboard');
    }
    public function ProfileDashboard()
    {
        if (!Auth::user()) {
            return redirect('/login');
        }
        $user = Auth::user();
        return view('user-dashboard.profile-dashboard', [
            "user" => $user,
            "password_placeholder" => "******"
        ]);
    }
    public function EditFoodPage()
    {
        $items_resturant = items::all();
        $data = ['items' => $items_resturant];
        if ($items_resturant->isEmpty()) {
            $data['message'] = 'No items yet';
        }
        return view('editfood.editfood', $data);
    }
    public function OrderPage()
    {
        $userorders = orders::with('user')->where('status', 'pending')->paginate(5);
        return view('orders.orders', ['userorders' => $userorders]);
    }
}

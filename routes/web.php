<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;

Route::get('/', [ViewController::class, 'ItemsPage']);

Route::get('/register', [ViewController::class, 'RegisterPage']);

Route::get('/login', [ViewController::class, 'LoginPage']);

Route::get('/addfood', [ViewController::class, 'AddFoodPage']);

Route::get('/item/{id}', [ViewController::class, 'ItemPage']);

Route::get('/dashboard/home', [ViewController::class, 'HomeDashboard']);

Route::get('/dashboard/order', [ViewController::class, 'OrderDashboard']);

Route::get('/dashboard/product', [ViewController::class, 'ProductDashboard']);

Route::get('/dashboard/setting', [ViewController::class, 'SettingDashboard']);

Route::get('/dashboard/profile', [ViewController::class, 'ProfileDashboard']);

Route::get('/editfood', [ViewController::class, 'EditFoodPage']);

Route::get('/orders', [ViewController::class, 'OrderPage']);
//views

Route::post('/register', [UserController::class, 'Registeration']);

Route::post('/login', [UserController::class, 'Login']);

Route::post('/logout', [UserController::class, 'Logout']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(['auth:sanctum']);

Route::patch('/edituser', [UserController::class, 'EditUserData']);
//users

Route::post('/addfood', [FoodController::class, 'AddFood']);

Route::patch('/editfood/{id}', [FoodController::class, 'EditFood']);

Route::delete('/deletefood/{id}', [FoodController::class, 'RemoveFood']);

Route::get('/items', [FoodController::class, 'GetItems']);

//items

Route::post('/addorder/{item_id}', [OrderController::class, 'AddOrder']);

Route::delete('/removeorder/{order_id}', [OrderController::class, 'RemoveOrder']);

Route::post('AcceptOrder/{order_id}', [OrderController::class, 'AcceptOrder']);

Route::post('Cancel/{order_id}', [OrderController::class, 'CancelOrder']);
//orders
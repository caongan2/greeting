<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/greeting/{name?}', function ($name= null) {
    if ($name) {
        echo 'Hello ' . $name . '!';
    } else {
        echo 'Welcome to Laravel';
    }
});

Route::get("/login", function (){
   return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'hieu'
    && $request->password == '123') {
        return view('discount');
    } else {
        return view('error');
    }
});

Route::get('/discount', function () {
    return view('discount');
});

Route::post('/discount', function (Illuminate\Http\Request $request) {
    $product = $request->product;
    $price = $request->listPrice;
    $percent = $request->percent;
    $result = $price * $percent * 0.01;
    $pay = $price - $result;
    return view('result', compact('result', 'pay', 'product','price', 'percent'));
});

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

Route::get('/greeting/{name?}', function ($name = null) {
    if ($name) {
        echo 'Hello ' . $name . '!';
    } else {
        return view('welcome');
    }
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    $username = $request->username;
    $password = $request->password;
    if ($request->username == 'hieu'
        && $request->password == '123') {
        return view('discount');
    } elseif ($request->username == 'khai' && $request->password == '321') {
        return view('dictionary',compact('username','password'));
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
    return view('result', compact('result', 'pay', 'product', 'price', 'percent'));
});
Route::get('/', function () {
    return view('welcome');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request) {
    $dictionary = [
        'hello' => 'xin chao',
        'thank you' => 'cam on',
        'book' => 'sach'
    ];
   $flag = 0;
   $search = $request->search;
   foreach ($dictionary as $key => $value) {
       if ($search == $key) {
           return view('resultDictionary',compact('key','value'));
       }
   }
   if ($flag == 0) {
       return 'ko tim thay';
   }

});

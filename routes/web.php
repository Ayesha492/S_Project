<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/doctor', function () {
    return view('doctor');
});

Route::get('/medicine_table', function () {
    $user= \App\Medicine::all();

    return view('buymedicine',compact('user'));
});

Route::get('/payment', function () {

    return view('payment');
});

//Route::post('/buy','BuyController@store');
Route::get('/up/{id}',function ($id)
{
    $user= \App\Medicine::find($id);
//    return $user;
   return view('payment',compact('user'));
});
Route::post('/pay','PaymentController@store');


Route::post('/doc','DoctorController@store');


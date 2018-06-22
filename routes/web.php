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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource("account","AccountsController");
Route::resource("user", "UsersController");
//Route::resource("product","ProductsController");
Route::get('account', function () {

    return App\Account::all();
});
Route::get('/', 'AdminController@index');

Route::get('/loginAdmin', 'AdminController@loginAdmin');

Route::get('/listUserAdmin', 'AdminController@listUser');

Route::get('/formUserAdmin', 'AdminController@formUser');

Route::get('/hello', function () {
    $product = \App\Product::where('category',1)->first();
    return response()->json($product, 201);
});
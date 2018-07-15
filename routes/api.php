<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/account', function (Request $request) {

    $entries = \App\Account::all();
    return response()->json($entries, 201);
});

Route::get('/account/{id}', function (Request $request, $id) {
    $entries = \App\Account::find($id);
    return response()->json($entries, 201);
});
Route::get('/account/destroy/{id}', function ($id) {
    \App\Account::destroy($id);
    return "destroy";

});
Route::get('/user', function (Request $request) {
    $entries = \App\User::all();
    return response()->json($entries, 201);
});
Route::get('/user/{id}', function (Request $request, $id) {
    $entries = \App\User::find($id);
    return response()->json($entries, 201);
});
Route::get('/user/destroy/{id}', function ($id) {
    \App\User::destroy($id);
    return "destroy";

});
//Route::get('/product', function (Request $request) {
//
////    $entries = \App\Product::all();
////    return response()->json($entries, 201);
//    return "halo";
//});
//Route::get('/product/{id}', function (Request $request, $id) {
//    $entries = \App\Product::find($id);
//    return response()->json($entries, 201);
//});
//Route::post('/user/hello', function (Request $request) {
//   $results = DB::insert('insert into users (Fullname ,Date_of_Birth, Email,Phone,Address ) value (? , ? ,? , ?,? )',['Lê văn luyện','11-12-1990','maasds@gmail.com','0123123121','Hà tĩnh']);
//
//});

Route::resource('products', 'Endpoint\ProductsController');
Route::resource('category', 'Endpoint\CategoriesController');
Route::resource('user','Endpoint\UsersController');
Route::resource('orders', 'Endpoint\OrdersController');
Route::resource('orderdetail', 'Endpoint\OrderDetailsController');
Route::get('/products/category/{id}','Endpoint\ProductsController@getByCategory');
Route::get('/products/{title}','Endpoint\ProductsController@search');
Route::get('/userphone/{phone}','Endpoint\UsersController@getByPhone');
//Route::post('/login','Endpoint\UsersController@checkLogin');
Route::post('login', function (Request $request) {

    $phone = $request->input('phone');
    $password= $request->input('$password');
    $data = DB::select('select id from users where phone =? and password=?',[$phone,$password]);
    if (count($data)){
        echo 'success';
    }
    else{
        echo "erross
    }
});










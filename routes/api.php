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
Route::post('/user/hello', function (Request $request) {
    $entries = [
        'Fullname' => 'Lê Văn Luyện',
        'Date_of_Birth' => '11-02-1992',
        'Email' => 'qưeqew@gmail.com',
        'Phone' => '132131313',
        'Address' => 'Hà TĨnh '
    ];
    $user = [
        "Fullname" => $request->input('Fullname'),
        "Date_of_Birth" =>$request->input('Date_of_Birth'),
        "Email" =>$request->input('Email'),
        "Phone" =>$request->input('Phone'),
        "Address" =>$request->input('Address')
    ];
    $entries [] = $user;
    return response()->json($entries, 200);


});





<?php

namespace App\Http\Controllers\Endpoint;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return response()->json($user, 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user, 200);


    }
    public function getByPhone($phone){
        $user = User::where('phone',$phone)->get();
        return response()->json($user, 200);

    }
    public function checkLogin(Request $request){
        if (Auth::check(['phone' => $request->phone, 'password' => $request->password])){
            $user = Auth::user();
            $user->save();
            return response([
                'status' => Response::HTTP_OK,
                'response_time' => microtime(true) - LARAVEL_START,
                'student' => $user
            ],Response::HTTP_OK);
        }
        return response([
            'status' => Response::HTTP_BAD_REQUEST,
            'response_time' => microtime(true) - LARAVEL_START,
            'error' => 'Wrong phone or password',
            'request' => $request->all()
        ],Response::HTTP_BAD_REQUEST);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

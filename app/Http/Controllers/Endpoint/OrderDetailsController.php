<?php

namespace App\Http\Controllers\Endpoint;

use App\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = OrderDetail::all();
        return response()->json($entries, 200);
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
        $orderdetailJson = $request->json()->all();
        $orderdetail = new OrderDetail();
        $orderdetail->orderId = $orderdetail['orderId'];
        $orderdetail->productId = $orderdetail['productId'];
        $orderdetail->quantity = $orderdetail['quantity'];
        $orderdetail->unitPrice = $orderdetail['unitPrice'];
        $orderdetail->unitPrice = $orderdetail['discount'];


        $orderdetail->save();
        return response()->json($orderdetailJson, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entries = OrderDetail::find($id);
        if ($entries === null) {
            return view("errors.404");
        }

        return response()->json($entries, 201);
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

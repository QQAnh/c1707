<?php

namespace App\Http\Controllers\Endpoint;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = \App\Product::all();
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:products|max:255',
            'category' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            'price' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('products/create')
                ->withErrors($validator->errors())
                ->withInput();
        }
        $productJson = $request->json()->all();

        $product = new Product();
        $product->title = $productJson['title'];
        $product->category = $productJson['category'];
        $product->description = $productJson['description'];
        $product->thumbnail = $productJson['thumbnail'];
        $product->price = $productJson['price'];
        $product->created_at = $productJson['created_at'];
        $product->updated_at = $productJson['updated_at'];
        $product->save();
        return response()->json($productJson, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $entries = \App\Product::find($id);
        if ($entries === null) {
            return view("errors.404");
        }

        return response()->json($entries, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productJson = $request->json()->all();
        $product = Product::find($id);
        if ($product === null) {
            return view("errors.404");
        }
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:products|max:255',
            'category' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            'price' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('products/update')
                ->withErrors($validator->errors())
                ->withInput();
        }
        $product->title = $productJson['title'];
        $product->category = $productJson['category'];
        $product->description = $productJson['description'];
        $product->thumbnail = $productJson['thumbnail'];
        $product->price = $productJson['price'];
        $product->created_at = $productJson['created_at'];
        $product->updated_at = $productJson['updated_at'];
        $product->save();
        return response()->json($productJson, 201);


    }
    public function getByCategory(){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $entries = \App\User::destroy($id);
        if ($entries === null) {
            return view("errors.404");
        }
        return "Success";
    }
}

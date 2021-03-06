<?php

namespace App\Http\Controllers\Endpoint;

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

    public function search(Request $request)
    {
        $title = $request->input('title');
        $data = DB::table('products')
            ->where('products.titles', 'like', '%' . $title . '%')
            ->get();
        return response()->json($data, 200);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|unique:products|max:50',
                'category' => 'required',
                'description' => 'required',
                'thumbnail' => 'required',
                'price' => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);

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
        } catch (EXCEPTION $exception) {
            return response()->json($exception->errors(), 500);
        }
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
            return;
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

    public function getByCategory($id)
    {
        $product = Product::where('category', $id)->get();
        return response()->json($product, 200);

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

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:products|max:50',
            'category' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            'price' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);

        }
        try {
            $product = Product::find($id);
            if ($product === null) {
                return response()->json($validator->errors(), 400);

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
        } catch (EXCEPTION $exception) {
            return response()->json($exception->errors(), 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

//        $entries = \App\User::destroy($id);
//        if ($entries === null) {
//            return view("errors.404");
//        }
//        return "Success";

    }
}

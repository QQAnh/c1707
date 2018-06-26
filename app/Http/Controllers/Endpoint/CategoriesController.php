<?php

namespace App\Http\Controllers\Endpoint;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Category::all();
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


        $categoryJson = $request->json()->all();
        $category = new Category();
        $category->id = $categoryJson['id'];
        $category->title = $categoryJson['title'];
        $category->image_url = $categoryJson['image_url'];
        $category->save();
        return response()->json($categoryJson, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request , $id)
    {
        $entries = Category::find($id);
        if ($entries === null) {
            return view("errors.404");
        }

        return response()->json($entries, 201);
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
        $categoryJson = $request->json()->all();
        $category = Category::find($id);
        if ($category === null) {
            return view("errors.404");
        }
        $category->title = $categoryJson['id'];
        $category->title = $categoryJson['title'];
        $category->title = $categoryJson['image_url'];
        $category->save();
        return response()->json($categoryJson, 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entries = Category::destroy($id);
        if ($entries === null) {
            return view("errors.404");
        }
        return "Success";
    }
}

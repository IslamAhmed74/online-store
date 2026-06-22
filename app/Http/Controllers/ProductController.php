<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        response()->json(['message' => 'okay', $product]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Product::create($request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:20',
            'p_price' => 'required|integer|max_digits:4'
        ]));
        return response()->json(['message'=> 'okay' ,'product'=> $validation]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return response()->json($product, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getcategory($id){
        $category = Product::find($id)->category;
        return response()->json($category, 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\category;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(StoreCategoryRequest $request){
        $category = category::create($request->validated());
        return response()->json($category);
    }
    public function index(){
        $category = category::all();
        return response()->json($category);
    }
    public function update(UpdateCategoryRequest $request , $id){
        $category = Category::find($id);
        $category->update($request->validated());
        return response()->json($category);
    }
    public function show($id){
        $category = Category::find($id);
        return response()->json($category);
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return response()->json(null);
    }

    public function getproducts($id){
        $products = Category::find($id)->products;
        return response()->json($products, 200);
    }
}

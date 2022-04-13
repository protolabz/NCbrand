<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
        // $products = Product::all();
        // return response()->json([
        // "success" => true,
        // "message" => "products List",
        // "data" => $products
        // ]);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $products = Product::create($input);
        return response()->json([
        "success" => true,
        "message" => "products created successfully.",
        "data" => $products
        ]);
    } 
}

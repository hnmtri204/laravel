<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $productList = Product::all();
        // return view('products.index', compact('productList'));
        $productList = Product::all();
        return view('products.index', compact('productList'));
        // return view('products.index', ['productList' => $productList]);
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
        return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        dd($product);
        return view('products.show', ['product' => $product]);
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
        // Product::findOrFail($id)->update($request->all());
        try {
            Product::findOrFail($id)->update($request->all());
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Product::findOrFail($id)->delete();
    }
    // public function search(Request $request)
    // {
    //     $key = $request->get('key');
    //     $products = Product::where('name', 'like', '%' . $key . '%')->get();

    //     return view('products.search', compact('products'));
    // }
    public function search(Request $request)
    {
        $key = $request->get('key'); // Get the search keyword from the request

        $products = Product::where('name', 'like', '%' . $key . '%')->get(); // Search products based on keyword

        return view('products.search', compact('products')); // Pass search results to the view
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Suppliers;
use App\Models\Categories;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Redirect;
use DB;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Products::all();

        Cache::put('Notebook', 'acer aspire 3 21b',10);
        $product = Cache::get('Notebook');

        // if (Cache::has('10_primeiros_produtos')) {
        //    $products = Cache::get('10_primeiros_produtos');
        // }else {
        //     $products = Products::orderByDesc('ProductID')->limit(10)->get();
        //     Cache::put('10_primeiros_produtos', $products, 15);
        // }

        //$products = Products::where('UnitsInStock', 0)->get();
        //Cache::put('produtos_sem_estoque', $products, 15);

        $products = Products::where('UnitsInStock','>',0)->get();
        Cache::put('produtos_em_estoque', $products, 15);

        // $products = Cache::remember('10_primeiros_produtos', 15, function () {
        //     return  Products::orderByDesc('ProductID')->limit(10)->get();
        // });

        return view('product/products',['products'=> $products,'title' => 'Testando o Redis','product'=> $product]);

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
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}

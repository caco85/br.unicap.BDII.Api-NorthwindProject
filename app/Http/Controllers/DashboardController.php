<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Suppliers;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $title = 'Bem vindo ao Northwind web shop';

        foreach ($products as $key => $value)
        {
            $products[$key]->supplier = Suppliers::where('SupplierID', $products[$key]->SupplierID)->first();
            $products[$key]->category = Categories::where('CategoryID', $products[$key]->CategoryID)->first();

        }
        return view('index',['products'=> $products,'title' => $title]);

    }

    public function getCart()
    {
        $title ='Bem vindo ao carrinho';
        $cartItemLists = collect([
            [
            'ProductID' => 21,
            'ProductName'=> 'Sir Rodneys Scones',
            'SupplierID' => 8,
            'CategoryID' => 3,
            'QuantityPerUnit' => '24 pkgs. x 4 pieces',
            'UnitPrice' => 10.000 ,
            'UnitsInStock' => 3 ,
            'UnitsOnOrder' => 40 ,
            'ReorderLevel'=> 5 ,
            'Discontinued'=> 0],
            [
            'ProductID'=> 23,
            'ProductName'=> 'Tunnbröd',
            'SupplierID' => 9,
            'CategoryID' => 5 ,
            'QuantityPerUnit' => '12 - x 250 g  pkgs.',
            'UnitPrice' => 9.000,
            'UnitsInStock' =>  61,
            'UnitsOnOrder' => 0,
            'ReorderLevel'=> 25,
            'Discontinued'=> 0],

            ['ProductID' => 10 ,
            'ProductName' => 'Ikura',
            'SupplierID'=> 4 ,
            'CategoryID'=> 8 ,
            'QuantityPerUnit' => '12 - x 200 ml  jars.',
            'UnitPrice' => 31.000,
            'UnitsInStock' => 31,
            'UnitsOnOrder' => 0,
            'ReorderLevel'=> 0,
            'Discontinued'=> 0],
         ]);

        return view('cart',['cartItemLists' => $cartItemLists , 'title' => $title]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Order_Details;
use App\Models\Customers;
use App\Models\Employees;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use Redirect;
use DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::all()->sortByDesc("OrderID");
        $title = "Lista de Compras";
        $nameButton = "Add compra";

        foreach ($orders as $key => $value)
        {
            $orders[$key]->customer =  Customers::where('CustomerID', $orders[$key]->CustomerID)->first();
            $orders[$key]->employee = Employees::where('EmployeeID', $orders[$key]->EmployeeID)->first();

        }

        return view('order/orders',['orders'=> $orders,'title' => $title,'nameButton' => $nameButton]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titleButton = "Save";
        return view('order/create',['titleButton' => $titleButton]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrdersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdersRequest $request)
    {


        $now = date('d/m/Y');
       // dd($now);

        $order = new Orders;
        $order->CustomerID = 'ALFKI';
        $order->EmployeeID = 9;
        $order->OrderDate =  $now;
        $order->RequiredDate =  $now;
        $order->ShippedDate =  $now;
        $order->ShipVia = 2;
        $order->Freight = 10.000;
        $order->ShipName = 'teste compra';
        $order->ShipAddress = 'teste compra';
        $order->ShipCity = 'teste compra';
        $order->ShipRegion = 'teste compra';
        $order->ShipPostalCode ='555 000';
        $order->ShipCountry = 'teste compra';
        $order->save();


        $inserted = DB::table('Order Details')->insert([
            ['OrderID' => $order->id, 'ProductID' => 21 ,'UnitPrice' => 10.000, 'Quantity' => 2 ,'Discount' => 0],
            ['OrderID' => $order->id, 'ProductID' => 23 ,'UnitPrice' => 9.000, 'Quantity' => 3 ,'Discount' => 0],
            ['OrderID' => $order->id, 'ProductID' => 10 ,'UnitPrice' => 31.00, 'Quantity' => 7 , 'Discount' => 0] ,
        ]);

       // dd($inserted);

        $orders = Orders::all()->sortByDesc("OrderID");
        $title = "Lista de Compras";
        $nameButton = "Add compra";

        foreach ($orders as $key => $value)
        {
            $orders[$key]->customer =  Customers::where('CustomerID', $orders[$key]->CustomerID)->first();
            $orders[$key]->employee = Employees::where('EmployeeID', $orders[$key]->EmployeeID)->first();

        }

        return view('order/orders',['orders'=> $orders,'title' => $title,'nameButton' => $nameButton]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Orders::where('OrderID', $id)->first();
        //dd($orders->OrderID);



            $order->customer = Customers::where('CustomerID', $order->CustomerID)->first();
            $order->employee = Employees::where('EmployeeID', $order->EmployeeID)->first();
            $order->orderDetails = Order_Details::where('OrderID', $order->OrderID)->get();

            // foreach ($order as $key => $value)
            // {
            //     $order[$key]->orderDetails = Order_Details::where('OrderID', $order[$key]->OrderID)->first();
            // }

        //dd($order);
         if ($order) {
             return view('order/show',['order' => $order]);
         }
         return Redirect::to('order/orders');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrdersRequest  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdersRequest $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }

    public function getCartItens($collections)
    {

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

        return $cartItemLists;
    }
}

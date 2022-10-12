<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Http\Requests\StoreCustomersRequest;
use App\Http\Requests\UpdateCustomersRequest;
use Redirect;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers = Customers::all();

        return view('customer/customers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomersRequest $request)
    {

        $data = $request->validated();

        $customer = new Customers;

        $customer->CompanyName = $data['CompanyName'];
        $customer->ContactName = $data['ContactName'];
        $customer->ContactTitle = $data['ContactTitle'];
        $customer->Address = $data['Address'];
        $customer->City = $data['City'];
        $customer->Region = $data['Region'];
        $customer->PostalCode = $data['PostalCode'];
        $customer->Country = $data['Country'];
        $customer->Phone = $data['Phone'];
        $customer->Fax = $data['Fax'];
        $customer->save();

        return Redirect::to('customer/customers');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customer)
    {

        //$customer = Customer::find($id);
        if ($customer) {
            return view('customer/show',['customer' => $customer]);
        }
        return Redirect::to('customer/customers');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customer)
    {
        //$customer = Customer::find($id);
        if ($customer) {
            return view('customer/edit',['customer' => $customer]);
        }
        return Redirect::to('customer/customers');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomersRequest  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomersRequest $request, Customers $customer)
    {
        $data = $request->validated();

        $customer->update($data);

        return Redirect::to('customer/edit',['customer'=>$customer]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        $customer = Customer::find($id);

        $customer->delete();

        return Redirect::to('customer/customers');
    }
}

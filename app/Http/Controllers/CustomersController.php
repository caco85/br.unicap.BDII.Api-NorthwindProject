<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Http\Requests\StoreCustomersRequest;
use App\Http\Requests\UpdateCustomersRequest;
use Redirect;
use DB;
class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::all();
        $title = "Lista de Clientes";
        $nameButton = "Add Cliente";

        return view('customer/customers',['customers'=> $customers,'title' => $title,'nameButton' => $nameButton]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titleButton = "Save";
        return view('customer/create',['titleButton' => $titleButton]);
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

        $customer->CustomerID = $data['CustomerID'];
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
    public function show($id)
    {

        $customer = Customers::where('CustomerID', $id)->first();

        dd( $customer);
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
    public function edit($id)
    {
        $customer = Customers::where('CustomerID', $id)->first();
       //dd( $customer);
        $titleButton = "Update";
        if ($customer) {
            return view('customer/edit',['customer' => $customer ,'titleButton' => $titleButton]);
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
    public function update(UpdateCustomersRequest $request,$id)
    {
        $titleButton = "Update";

        $data = $request->validated();

        $customer = Customers::where('CustomerID', $id)->first();

      //  $customer->update($data);

        $updated = DB::table('Customers')
                ->where('CustomerID', $id)
                ->update($data);

        if ($updated) {
            $customer = Customers::where('CustomerID', $id)->first();
            return view('customer/edit',['customer'=>$customer, 'titleButton' => $titleButton ,'status']);
        }

        return Redirect::to('customer/customers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customers::where('CustomerID', $id)->first();

        $customer->delete();

        return Redirect::to('customer/customers');
    }
}

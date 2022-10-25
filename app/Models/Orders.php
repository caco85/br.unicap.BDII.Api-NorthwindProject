<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;


    protected $table = 'Orders';

    public $timestamps = false;

    protected $fillable =
    [
        'OrderID',
        'CustomerID',
        'EmployeeID',
        'OrderDate',
        'RequiredDate',
        'ShippedDate',
        'ShipVia',
        'Freight',
        'ShipName',
        'ShipAddress',
        'ShipCity',
        'ShipRegion',
        'ShipPostalCode',
        'ShipCountry',
    ];

    public function customer()
    {
        return $this->hasOne(Customers::class,'CustomerID');
    }


    public function employee()
    {
        return $this->hasOne(Employees::class,'EmployeeID');
    }

    public function orderDetails()
    {
        return $this->hasOne(Order_Details::class,'OrderID');
    }
}

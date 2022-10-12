<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;


    protected $table = 'Orders';

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
}

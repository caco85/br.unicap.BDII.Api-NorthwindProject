<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    use HasFactory;

    protected $table = 'Order Details';

    public $timestamps = false;

    protected $fillable =
    [
        'OrderID',
        'ProductID',
        'UnitPrice' ,
        'Quantity',
        'Discount',
    ];
}

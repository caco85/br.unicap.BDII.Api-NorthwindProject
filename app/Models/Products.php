<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'Products';

    protected $fillable =
    [
        'ProductID',
        'ProductName',
        'Supplier_ID',
        'Category_ID' ,
        'QuantityPerUnit',
        'UnitPrice',
        'UnitsInStock',
        'UnitsOnOrder' ,
        'ReorderLevel',
        'Discontinued',

    ];
}

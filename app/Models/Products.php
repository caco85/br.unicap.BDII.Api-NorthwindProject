<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'Products';
    public $timestamps = false;
    protected $fillable =
    [
        'ProductID',
        'ProductName',
        'SupplierID',
        'CategoryID' ,
        'QuantityPerUnit',
        'UnitPrice',
        'UnitsInStock',
        'UnitsOnOrder' ,
        'ReorderLevel',
        'Discontinued',

    ];

    public function supplier()
    {
        return $this->hasOne(Suppliers::class,'SupplierID');
    }


    public function category()
    {
        return $this->hasOne(Categories::class,'CategoryID');
    }
}

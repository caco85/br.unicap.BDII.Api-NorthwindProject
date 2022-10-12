<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Territories extends Model
{
    use HasFactory;

    protected $table = 'Employee_Territories';

    protected $fillable = ['employee_id','territory_id'];
}

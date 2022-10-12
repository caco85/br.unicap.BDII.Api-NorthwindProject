<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'Employees';

    protected $filable = ['EmployeeID','LastName','FirstName','Title','TitleOfCourtesy','BirthDate','HireDate','Address',
                'City','Region','PostalCode','Country','HomePhone','Extension','Photo','Notes','ReportsTo','PhotoPath'];
}

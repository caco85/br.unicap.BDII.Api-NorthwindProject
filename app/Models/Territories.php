<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Territories extends Model
{
    use HasFactory;

    protected $table = 'Territories';

    protected $fillable =
    [
        'TerritoryID',
        'TerritoryDescription',
        'RegionID',
    ];
}

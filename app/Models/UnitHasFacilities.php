<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitHasFacilities extends Model
{
    use HasFactory;

    public $fillable = ['unit_id','facility_id'];
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public $fillable = [
        'property_id',
        'unit_name',
        'unit_picture',
        'unit_desription',
        'total_unit',
        'price'
    ];

    public function property(){
        return $this->hasOne(Property::class, 'id','property_id');
    }
}

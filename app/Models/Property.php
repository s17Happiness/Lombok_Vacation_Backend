<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public $fillable = ['user_id','property_name','area','type','value'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function unit(){
        return $this->hasMany(Unit::class, 'property_id' ,'id');
    }
}

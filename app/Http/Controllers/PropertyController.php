<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function view(){
        return view('property.addProperty');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'area' => 'required',
            'type' => 'required',
        ]);

        $property = Property::create([
            'user_id' => $request->user()->id,
            'property_name' => $request->name,
            'area' => $request->area,
            'type' => $request->type,
        ]);

        if($property){
            session()->flash('success', 'Sukses Menambahkan');
        } else {
            session()->flash('failed', 'Gagal Menambahkan');
        }

        return redirect('/add-property');
    }
}

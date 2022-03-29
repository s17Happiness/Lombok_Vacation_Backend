<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function view($id){
        return view('unit.addUnit', compact('id'));
    }

    public function store(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'total_unit' => 'required',
            'price' => 'required',
            'desc' => 'required',
        ]);

        $unit = Unit::create([
            'property_id' => $id,
            'unit_name' => $request->name,
            'unit_description' => $request->desc,
            'total_unit' => $request->total_unit,
            'price' => $request->price,
            'unit_picture' => "test pict"
        ]);



        if($unit){
            session()->flash('success', 'Sukses Menambahkan');
        } else {
            session()->flash('failed', 'Gagal Menambahkan');
        }

        return redirect('property/' . $id . '/add-unit');
    }
}

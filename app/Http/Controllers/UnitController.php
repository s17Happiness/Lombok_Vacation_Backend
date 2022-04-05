<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function view($id){
        $title = "Add Unit";
        return view('unit.addUnit', compact('id','title'));
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

        return redirect('property/' . $id);
    }

    public function updateUnitView($id, $unit_id){
        $title = "Edit Unit";
        $unit = Unit::find($unit_id);
        return view('unit.updateUnit', compact('id', 'unit_id','title', 'unit'));
    }

    public function updateUnit(Request $request, $id, $unit_id){
        $this->validate(request(), [
            'unit_name' => 'nullable',
            'unit_picture' => 'nullable',
            'unit_description' => 'nullable',
            'total_unit' => 'nullable',
            'price' => 'nullable'
        ]);

        Unit::where('property_id', $id)
        ->where('id', $unit_id)
        ->update(
            ['unit_name'=>$request->name,
            'unit_description'=>$request->desc,
            'total_unit'=>$request->total_unit,
            'price'=>$request->price,
            'unit_picture'=>$request->filename
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $property = Unit::find($id);

        $property->forceDelete();

        return redirect()->back();
    }
}

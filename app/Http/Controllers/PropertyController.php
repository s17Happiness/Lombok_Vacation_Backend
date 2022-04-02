<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function view(){
        return view('property.addProperty');
    }

    public function updatePropertyView($id){
        return view('property.updateProperty', compact('id'));
    }

    public function updateProperty(Request $request, $id){
        $this->validate(request(), [
            'property_name' => 'nullable',
            'area' => 'nullable',
            'type' => 'nullable'
        ]);

        $property = Property::find($id);

        $property->property_name = $request->name;
        $property->area = $request->area;
        $property->type = $request->type;

        $property->save();

        return redirect()->to('/update-property/{id}');
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

    public function guesthouseView(){
        return view('property.guesthouse');
    }
    public function villaView(){
        return view('property.villa');
    }
    public function hotelView(){
        return view('property.hotel');
    }
    public function cottageView(){
        return view('property.cottage');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function view(){
        $title ="Add Property";
        return view('property.addProperty',compact('title'));
    }

    public function updatePropertyView($id){
        $title ="Edit Property";
        return view('property.updateProperty', compact('id','title'));
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
        $results = Property::all()->where('type', '=', 'guest_house');
        $title = "Guest House List";
        return view('property.guesthouse', compact('results','title'));
    }
    public function villaView(){
        $results = Property::all()->where('type', '=', 'villa');
        $title = "Villa List";
        return view('property.villa', compact('results','title'));
    }

    public function hotelView(){
        $results = Property::all()->where('type', '=', 'hotel');
        $title = "Hotel List";
        return view('property.hotel', compact('results','title'));
    }
    public function cottageView(){
        $results = Property::all()->where('type', '=', 'cottage');
        $title = "Cottage List";
        return view('property.cottage', compact('results','title'));
    }
}

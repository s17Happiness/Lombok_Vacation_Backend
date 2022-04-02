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
        $results = Property::all()->where('type', '=', 'guest_house');
        return view('property.guesthouse', compact('results'));
    }
    public function villaView(){
        $results = Property::all()->where('type', '=', 'villa');
        return view('property.villa', compact('results'));
    }

    public function hotelView(){
        $results = Property::all()->where('type', '=', 'hotel');
        return view('property.hotel', compact('results'));
    }
    public function cottageView(){
        $results = Property::all()->where('type', '=', 'cottage');
        return view('property.cottage', compact('results'));
    }
}

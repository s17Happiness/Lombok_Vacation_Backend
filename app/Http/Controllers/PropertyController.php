<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Unit;
use App\Models\UnitFacilities;

class PropertyController extends Controller
{
    public function view(){
        $title ="Add Property";
        return view('property.addProperty',compact('title'));
    }

    public function propertyDetailView($id){
        $results = Unit::all()->where('property_id', '=', $id);
        $title ="Lombok Vacation Property Detail";
        $property = Property::find($id);
        $facilities = UnitFacilities::all();
        return view('property.propertyDetail', compact('id','title', 'property', 'results', 'facilities'));
    }

    public function updatePropertyView($id){
        $title ="Edit Property";
        $property = Property::find($id);
        return view('property.updateProperty', compact('id','title', 'property'));
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

        return redirect()->back();
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

        return redirect()->back();
    }

    public function guesthouseView(){
        $results = Property::where('type', '=', 'guest_house')->paginate(5);
        $title = "Guest House List";
        return view('property.guesthouse', compact('results','title'));
    }

    public function villaView(){
        $results = Property::where('type', '=', 'villa')->paginate(5);
        $title = "Villa List";
        return view('property.villa', compact('results','title'));
    }

    public function hotelView(){
        $results = Property::where('type', '=', 'hotel')->paginate(5);
        $title = "Hotel List";
        return view('property.hotel', compact('results','title'));
    }
    public function cottageView(){
        $results = Property::where('type', '=', 'cottage')->paginate(5);
        $title = "Cottage List";
        return view('property.cottage', compact('results','title'));
    }

    public function destroy($id)
    {
        $property = Property::find($id);

        $property->forceDelete();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitHasFacilities;

class UnitFacilitiesController extends Controller
{
    public function store($unit_id, $facilites_id){
        $facilities = UnitHasFacilities::create([
            'unit_id' => $unit_id,
            'facility_id' => $facilites_id
        ]);

        return redirect()->back();
    }
}

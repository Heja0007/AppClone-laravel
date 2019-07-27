<?php

namespace App\Http\Controllers;

use App\District;
use App\States;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getDistrict($id)
    {
        $district = District::where('Pradesh_id', $id)->get();
        return json_encode($district);
    }
}

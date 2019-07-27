<?php

namespace App\Http\Controllers;

use App\LocalGovt;
use Illuminate\Http\Request;

class LocalGovtController extends Controller
{
    public function getLocal($id)
    {
        $locals = LocalGovt::where('district_id' , $id)->get();
        return json_encode($locals);
    }
}

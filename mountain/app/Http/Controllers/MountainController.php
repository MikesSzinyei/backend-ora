<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MountainController extends Controller {
    public function getView() {
        return view ("myform");
    }

    public function submitData(Request $request) {

        $request -> validate([
            "name" => "required", 
            "height" => "required",
            "location" => "required"
        ],[
            "name.required" => "A név nem lehet üres",
            "height.required" => "A magasság nem lehet üres",
            "location.required" => "A hely nem lehet üres"
        ]);

        echo "<pre>";
        print_r($request->all() );
    }

}

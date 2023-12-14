<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDrinkData;
use Illuminate\Support\Facades\Validator;

class PubController extends Controller {
    public function getForm() {
        return view("myform");
    }
    // public function setDrink(Request $request) {
    //     echo "<pre>";
    //     // print_r($request->all());
    //     print_r($request->input("name"));
    // }

    public function setDrink(Request $request) {

        $request->validate([
            "name" => "required",
            "type" => "required",
            "alc" => "required"
        ],[
            "name.required" => "A név mező nem lehet üres",
            "name.min" => "A karakterek min 4 elvárt",
            "name.max" => "A karakterek max 10 lehet",
            "type.required" => "A típus mező nem lehet üres",
            "alc.required" => "Az alkohol mező nem lehet üres"
        ]);

        return view("myform");
    }

    public function submitDrink( StoreDrinkData $request ) {

        $request -> validated();
        print_r($request->all() );
    }

    public function checkDrink(Request $request) {

        $validate = Validator::make( $request->all(), [
            "name" => "required", 
            "type" => "required",
            "alc" => "required"
        ],[
            "name.required" => "A név nem lehet üres"
        ]);

        if($validate->fails() ) {
            return redirect("pub") -> withErrors()->withInput();
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NezetController extends Controller {
    public function getSide() {
        return view("oldal");
    }

}

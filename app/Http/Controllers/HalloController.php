<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function start(){
        return "Hallo";
    }
}

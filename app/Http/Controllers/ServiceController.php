<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function listing(){
        $title = 'Services';
        return view('services', compact('title'));
    }
}

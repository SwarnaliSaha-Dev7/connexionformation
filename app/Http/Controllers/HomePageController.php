<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homepage(){

        $title = 'Accueil';

        // $data['PageHomeData'] = PageHome::first();

        return view('home', compact('title'));
        // return view('frontend.layouts.app', compact('title','page_title'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternshipCatalogController extends Controller
{
    public function listing(){
        $title = 'Internship Catalog';
        return view('catalog-internship', compact('title'));
    }
}

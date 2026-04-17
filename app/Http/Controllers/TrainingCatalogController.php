<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingCatalogController extends Controller
{
    public function listing(){
        $title = 'Training Catalog';
        return view('catalog-training', compact('title'));
    }
}

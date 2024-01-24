<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function appshomepage()
    {
        return view('categoryhomepages.apps.apps');
    }

    public function appsservice()
    {
        $appservice = Offer::where('tools','App')->get();
        return view('categoryhomepages.apps.appservice',['service'=>$appservice]);
    }
}

<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\train;

class PageController extends Controller {
    
    function home() {

        $train = train::all();

        dump($train);

        return view('home',[
            "train" => $train,
        ]);
    }

}


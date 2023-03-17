<?php

namespace App\Http\Controllers;

use App\Models\feedbacks;
use App\Models\offers;
use App\Models\services;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function welcome(){
        $services = services::all();
        $feedbacks = feedbacks::all();
        $offers = offers::all();

        return view('welcome',compact('services','feedbacks','offers'));
        // ,'offers','business','tranformation','categories','brands'
    }
}

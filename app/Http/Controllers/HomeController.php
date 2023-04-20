<?php

namespace App\Http\Controllers;

use App\Models\feedbacks;
use App\Models\offers;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
        $services = Service::all();
        $feedbacks = feedbacks::all();
        $offers = offers::all();

        return view('welcome',compact('services','feedbacks','offers'));
        // ,'offers','business','tranformation','categories','brands'
    }
}

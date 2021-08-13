<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowsAndEventsController extends Controller
{
    //
    public function currentEvents (){
        return view('showsAndEvnts.currentevents');
    }

    public function upcomingEvents (){
        return view('showsAndEvnts.upcomingevents');
    }
    public function reports(){
        return view('showsAndEvnts.reportsandresults');
    }
}

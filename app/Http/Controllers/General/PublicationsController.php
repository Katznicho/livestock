<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    //
    public function current(){
        return view('Publications.current');
    }
    public function annual(){
        return view('Publications.annual');
    }

    public function society(){
        return view('Publications.society');
    }
    


}

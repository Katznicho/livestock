<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
        //
        public function index(){
            return view('Auth.Register');
        }
        //store
        public function store(Request $requesst){
    
        }
}

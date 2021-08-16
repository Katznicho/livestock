<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    //aboutus
    public function byelaws(){
        return view('Organizations.AboutUs.Byelaws');
    }
    public function consitution(){
        return view('Organizations.AboutUs.consitution');
    }
    public function executive(){
        return view('Organizations.AboutUs.Exacutive');
    }
    public function history(){
        return view('Organizations.AboutUs.History');
    }
    public function joining(){
        return view('Organizations.AboutUs.Joining');
    }
    public function staffmembers(){
        return view('Organizations.AboutUs.StaffMembers');
    }
    //abputus

    //breed socities
    public function breedlinks(){
        return view("Organizations.BreedSocieties.Breedlinks");
    }
    public function breedstandards(){
        return view('Organizations.BreedSocieties.BreedStandards');
    }
    public function membership(){
        return view('Organizations.BreedSocieties.Membership');
    }

    //breed socities

    //staf members
    //staff members

}

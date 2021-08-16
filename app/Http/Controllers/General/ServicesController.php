<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //extenstion and trainin
    public function trainingservices(){
        return view('Services.ExtensionAndTraining.Training');
    }
    public function inspection(){
        return view('Services.ExtensionAndTraining.inspection');
    }
    public function findinspector(){
        return view('Services.ExtensionAndTraining.findInspector');
    }
    // public function rules(){
    //     return view('Services.LivestockRegistration.Rules')
    // }
    //extension and traininig

    //livestock registration
    public function animalidentification (){
        return view('Services.LivestockRegistration.AnimalIdentification');

    }
    public function officialforms (){
        return view('Services.LivestockRegistration.OfficialForms');
    }
    public function onlineherd(){
        return view('Services.LivestockRegistration.Rules');
    }
    public function rules(){
        return view('Services.LivestockRegistration.Rules');
    }
    //livestock registration

    //performance recording
    public function  submitmilkdata(){
        return view('Services.PerfrormanceRecording.SubmitMilkData');

    }
    public function technicalinformation(){
        return view('Services.PerfrormanceRecording.TechnicalInformation');
    }

    public function dsrules(){
        return view('Services.PerfrormanceRecording.DSRules');
    }
    //performance recording

}

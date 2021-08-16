<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\General\ShowsAndEventsController;
use App\Http\Controllers\General\PublicationsController;
use App\Http\Controllers\General\ServicesController;
use App\Http\Controllers\General\OrganizationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home.home');
})->name('/');

//contact us
Route::get('/contactus', function(){
    return view('contactus.contactus');
})->name('contactus');

//register
Route::get("/login", [LoginController::class, "index"])->name('login');
//register

//login
Route::get('/register', [RegisterController::class , "index"])->name('register');
//login

//shows and events
Route::get('/upcomingevents', [ShowsAndEventsController::class , "upcomingEvents"])->name('upcomingevnts');
Route::get('/currentevents', [ShowsAndEventsController::class , "currentEvents"])->name('currentevents');
Route::get('/reports', [ShowsAndEventsController::class , "reports"])->name('reports');

//shows and events

//publications
Route::get('/currentpublications', [PublicationsController::class , "current"])->name('currentpublications');
Route::get('/annualpublications', [PublicationsController::class , "annual"])->name('annualpublications');
Route::get('/societypublications', [PublicationsController::class , "society"])->name('societypublications');
//publications

//services
Route::get("/services/extensionandtraining/trainingservices", [ServicesController::class ,"trainingservices"])
->name("/services/extensionandtraining/trainingservices");
Route::get("/services/extensionandtraining/inspection", [ServicesController::class ,"inspection"])
->name("/services/extensionandtraining/inspection");
Route::get("/services/extensionandtraining/findinspector", [ServicesController::class ,"findinspector"])
->name("/services/extensionandtraining/findinspector");
Route::get("/services/extensionandtraining/rules", [ServicesController::class ,"rules"])
->name("/services/extensionandtraining/rules");

Route::get("/services/livestockregistration/animalidentification", [ServicesController::class ,"animalidentification"])
->name("/services/livestockregistration/animalidentification");
Route::get("/services/livestockregistration/officialforms", [ServicesController::class ,"officialforms"])
->name("/services/livestockregistration/officialforms");
Route::get("/services/livestockregistration/onlineherd", [ServicesController::class ,"onlineherd"])
->name("/services/livestockregistration/onlineherd");

Route::get("/services/performancerecording/submitmilkdata", [ServicesController::class ,"submitmilkdata"])
->name("/services/performancerecording/submitmilkdata");
Route::get("/services/performancerecording/technicalinformation", [ServicesController::class ,"technicalinformation"])
->name("/services/performancerecording/technicalinformation");
Route::get("/services/performancerecording/dsrules", [ServicesController::class ,"dsrules"])
->name("/services/performancerecording/dsrules");

//services

//organizations
Route::get('/organization/aboutus/byelaws', [OrganizationController::class , "byelaws"])
->name("/organization/aboutus/byelaws");
Route::get('/organization/aboutus/consitution', [OrganizationController::class , "consitution"])
->name("/organization/aboutus/consitution");
Route::get('/organization/aboutus/executive', [OrganizationController::class , "executive"])
->name("/organization/aboutus/executive");
Route::get('/organization/aboutus/history', [OrganizationController::class , "history"])
->name("/organization/aboutus/history");
Route::get('/organization/aboutus/joining', [OrganizationController::class , "joining"])
->name("/organization/aboutus/joining");
Route::get('/organization/aboutus/staffmembers', [OrganizationController::class , "staffmembers"])
->name("/organization/aboutus/staffmembers");

Route::get('/organization/breedsocieties/breedlinks', [OrganizationController::class , "breedlinks"])
->name("/organization/breedsocieties/breedlinks");
Route::get('/organization/breedsocieties/breedstandards', [OrganizationController::class , "breedstandards"])
->name("/organization/breedsocieties/breedstandards");
Route::get('/organization/breedsocieties/membership', [OrganizationController::class , "membership"])
->name("/organization/breedsocieties/membership");


//organizations
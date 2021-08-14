<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\General\ShowsAndEventsController;
use App\Http\Controllers\General\PublicationsController;

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
//services

//organizations
//organizations
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AboutgauController;
use App\Http\Controllers\Frontend\AboutrakshaController;
use App\Http\Controllers\Frontend\ContactGaurakshaController;
use App\Http\Controllers\Frontend\donationController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\EducationController;
use App\Http\Controllers\Frontend\HealthController;
use App\Http\Controllers\Frontend\JoinMovementController;
use App\Http\Controllers\Frontend\LegaldocController;
use App\Http\Controllers\Frontend\OurInitiativeController;
use App\Http\Controllers\Frontend\OurMissionController;
use App\Http\Controllers\Frontend\OurServicesController;
use App\Http\Controllers\Frontend\OurVisionController;
use App\Http\Controllers\Frontend\PhotosController;
use App\Http\Controllers\Frontend\VideosController;
use App\Http\Controllers\Frontend\VoulnteerController;
use App\Http\Controllers\Frontend\WomaneController;


Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/legaldoc',[LegaldocController::class,'index']);
Route::get('/volunteer',[VoulnteerController::class,'index']);
Route::get('/donation',[donationController::class,'index']);
Route::get('/education',[EducationController::class,'index']);
Route::get('/health',[HealthController::class,'index']);
Route::get('/womane',[WomaneController::class,'index']);
Route::get('/photos',[PhotosController::class,'index']);
Route::get('/videos',[VideosController::class,'index']);
Route::get('/aboutgau',[AboutgauController::class,'index']);
Route::get('/ourmission',[OurMissionController::class,'index']);
Route::get('/ourservices',[OurServicesController::class,'index']);
Route::get('/aboutraksha',[AboutrakshaController::class,'index']);
Route::get('/our_vision',[OurVisionController::class,'index']);
Route::get('/ourInitiatives',[OurInitiativeController::class,'index']);
Route::get('/join_movement',[JoinMovementController::class,'index']);
Route::get('/contact_gauraksha',[ContactGaurakshaController::class,'index']);
Route::get('/Contactus',[ContactusController::class,'index']);



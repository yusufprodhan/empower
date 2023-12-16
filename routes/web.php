<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//open pages route
Route::get('/', [IndexController::class,'index'])->name('index');
Route::get('our-story', [IndexController::class,'ourStory'])->name('our-story');
Route::get('vision-mission', [IndexController::class,'visionMission'])->name('vision-mission');
Route::get('board-of-directors', [IndexController::class,'boardOfDirectors'])->name('board-of-directors');
Route::get('our-companies', [IndexController::class,'ourCompanies'])->name('our-companies');
Route::get('upcoming', [IndexController::class,'upcoming'])->name('upcoming');
Route::get('carrier', [IndexController::class,'carrier'])->name('carrier');
Route::get('land-owner', [IndexController::class,'landOwner'])->name('land-owner');
Route::get('buyers', [IndexController::class,'buyers'])->name('buyers');
Route::get('customers', [IndexController::class,'customers'])->name('customers');
Route::get('contact-us', [IndexController::class,'contactUs'])->name('contact-us');
Route::get('home-loan', [IndexController::class,'homeLoan'])->name('home-loan');
Route::get('legal-vatting', [IndexController::class,'legalVatting'])->name('legal-vatting');
Route::get('interior', [IndexController::class,'interiorLanding'])->name('interior');
Route::get('interior-residential', [IndexController::class,'interiorResidential'])->name('interior-residential');
Route::get('interior-commercial', [IndexController::class,'interiorCommercial'])->name('interior-commercial');
Route::get('architectural-design', [IndexController::class,'architecturalDesign'])->name('architectural-design');
Route::get('plot-flat-buy-sell', [IndexController::class,'plotFlatBuySell'])->name('plot-flat-buy-sell');
Route::get('residential-commercial-space-for-rent', [IndexController::class,'residentialCommercialSpaceForRent'])->name('residential-commercial-space-for-rent');
Route::get('residential-commercial-lift', [IndexController::class,'residentialCommercialLift'])->name('residential-commercial-lift');

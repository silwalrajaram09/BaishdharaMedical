<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

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



Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/services',[HomeController::class, 'services']);
Route::get('services/cosmic-dentistry',[HomeController::class, 'cosmic']);
Route::get('services/implant-dentistry',[HomeController::class, 'implant']);
Route::get('services/root-canal-treatment',[HomeController::class, 'root']);
Route::get('services/orthodontics',[HomeController::class, 'orthodontics']);
Route::get('services/removable-dentures',[HomeController::class, 'removable']);
Route::get('services/minor-oral-surgery',[HomeController::class, 'minor']);
Route::get('services/scaling-polishing',[HomeController::class, 'scaling']);
Route::get('services/wisdom-tooth-extraction',[HomeController::class, 'wisdom']);
Route::get('/doctors',[HomeController::class, 'doctors']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/pricing',[HomeController::class, 'pricing']);
Route::get('doctors/bishwo',[HomeController::class, 'bishwo']);
Route::get('doctors/dinesh',[HomeController::class, 'dinesh']);
Route::get('doctors/merina',[HomeController::class, 'merina']);
Route::get('doctors/muna',[HomeController::class, 'muna']);



Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/contact', [HomeController::class, 'store'])->name('contact.us.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

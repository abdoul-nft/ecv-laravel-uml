<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ContratController;
use app\Http\Controllers\ControleController;
use app\Http\Controllers\EmployeController;
use app\Http\Controllers\LocationController;
use app\Http\Controllers\VehiculeController;
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
    return view('hero');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/vehicule', function () {
    return view('vehicule');
});

Route::get('/create-vehicule', function () {
    return view('vehicule.create-vehicule');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/dashboard', [AnnonceController::class, 'dashboard'])->name('home');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contrat-details/{contrat}', [ContratController::class, 'show'])->name('contrat-details');
Route::get('/contrat-create', [ContratController::class, 'create'])->name('contrat-create');
Route::get('/edit-contrat/{contrat}', [ContratController::class, 'edit'])->name('edit-contrat');
Route::get('/update-contrat', [ContratController::class, 'update'])->name('update-contrat');
Route::get('/index', [ContratController::class, 'index'])->name('index');

Route::get('/controle-details/{controle}', [ControleController::class, 'show'])->name('controle-details');
Route::get('/controle-create', [ControleController::class, 'create'])->name('controle-create');
Route::get('/edit-controle/{controle}', [ControleController::class, 'edit'])->name('edit-controle');
Route::get('/update-controle', [ControleController::class, 'update'])->name('update-controle');
Route::get('/index', [ControleController::class, 'index'])->name('index');

Route::get('/employe-details/{employe}', [EmployeController::class, 'show'])->name('employe-details');
Route::get('/employe-create', [EmployeController::class, 'create'])->name('employe-create');
Route::get('/edit-employe/{employe}', [EmployeController::class, 'edit'])->name('edit-employe');
Route::get('/update-employe', [EmployeController::class, 'update'])->name('update-employe');
Route::get('/index', [EmployeController::class, 'index'])->name('index');

Route::get('/location-details/{employe}', [LocationController::class, 'show'])->name('location-details');
Route::get('/location-create', [LocationController::class, 'create'])->name('location-create');
Route::get('/edit-location/{employe}', [LocationController::class, 'edit'])->name('edit-location');
Route::get('/update-location', [LocationController::class, 'update'])->name('update-location');
Route::get('/index', [LocationController::class, 'index'])->name('index');

Route::get('/vehicule-details/{vehicule}', [VehiculeController::class, 'show'])->name('vehicule-details');
Route::get('/vehicule-create', [VehiculeController::class, 'create'])->name('vehicule-create');
Route::get('/edit-vehicule/{vehicule}', [VehiculeController::class, 'edit'])->name('edit-vehicule');
Route::get('/update-vehicule', [VehiculeController::class, 'update'])->name('update-vehicule');
Route::get('/index', [VehiculeController::class, 'index'])->name('index');


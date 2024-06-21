<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployersController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AuthController::class,'login'])->name('login');  
Route::post('/', [AuthController::class,'handleLogin'])->name('handleLogin'); 


// Apres connexion
route::middleware('auth')->group(function(){

    Route::get('dashboard', [AppController::class, 'index'])->name('dashboard');
    route::prefix('employers')->group(function(){
        route::get('/', [EmployersController::class, 'index'])->name('employers.index');
        route::get('/create', [EmployersController::class, 'create'])->name('employers.create');
        route::get('/edit{employers}', [EmployersController::class, 'edit'])->name('employers.edit');

    });

    route::prefix('departements')->group(function(){
        route::get('/', [DepartementController::class, 'index'])->name('departement.index');
        route::get('/create', [DepartementController::class, 'create'])->name('departement.create');
        route::post('/create', [DepartementController::class, 'store'])->name('departement.store');
        route::get('/edit{employers}', [DepartementController::class, 'edit'])->name('departement.edit');

    });

});
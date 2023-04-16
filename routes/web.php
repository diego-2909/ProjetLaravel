<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbriController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\SommetController;
use App\Http\Controllers\ValleeController;
use App\Http\Controllers\AscensionController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;


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



Route::middleware(['checkAdmin'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index']);
    Route::get('/home', [WelcomeController::class, 'index']);
    Route::get('/abris', [AbriController::class, 'index']);
    Route::get('/abris/supprimer/{code_Abris}', [AbriController::class, 'delete']);
    Route::get('/abris/modifier/{code_Abris}', [AbriController::class, 'modifier'])->name('abris.modifier');
    Route::put('/abris/{code_Abris}', [AbriController::class, 'update'])->name('abris.update');

    Route::get('/randonnees', [RandonneeController::class, 'index']);
    Route::get('/randonnees/supprimer/{code_Randonnees}', [RandonneeController::class, 'delete']);
    Route::get('/randonnees/modifier/{code_Randonnees}', [RandonneeController::class, 'modifier'])->name('randonnees.modifier');
    Route::put('/randonnees/{code_Randonnees}', [RandonneeController::class, 'update'])->name('randonnees.update');

    Route::get('/guides', [GuideController::class, 'index']);
    Route::get('/guides/supprimer/{code_Guides}', [GuideController::class, 'delete']);
    Route::get('/guides/modifier/{code_Guides}', [GuideController::class, 'modifier'])->name('guides.modifier');
    Route::put('/guides/{code_Guides}', [GuideController::class, 'update'])->name('guides.update');

    Route::get('/sommets', [SommetController::class, 'index']);
    Route::get('/sommets/supprimer/{code_Sommets}', [SommetController::class, 'delete']);
    Route::get('/sommets/modifier/{code_Sommets}', [SommetController::class, 'modifier'])->name('sommets.modifier');
    Route::put('/sommets/{code_Sommets}', [SommetController::class, 'update'])->name('sommets.update');

    Route::get('/vallees', [ValleeController::class, 'index']);
    Route::get('/vallees/supprimer/{code_Vallees}', [ValleeController::class, 'delete']);
    Route::get('/vallees/modifier/{code_Vallees}', [ValleeController::class, 'modifier'])->name('vallees.modifier');
    Route::put('/vallees/{code_Vallees}', [ValleeController::class, 'update'])->name('vallees.update');


    Route::get('/ascensions', [AscensionController::class, 'index']);
    Route::get('/ascension/supprimer/{code_sommet}/{code_Abris}', [AscensionController::class, 'delete']);
    Route::get('/ascension/modifier/{code_sommet}/{code_Abris}', [AscensionController::class, 'modifier'])->name('ascension.modifier');
    Route::put('/ascension/{code_sommet}/{code_Abris}', [AscensionController::class, 'update'])->name('ascension.update');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

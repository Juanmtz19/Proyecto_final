<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarController;
use App\Http\Controllers\SaxophonealtoController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;    
use App\Http\Controllers\InformationController;  
use App\Http\Controllers\TestController;  
use App\Models\Guitar;
use App\Models\User;
use App\Models\Information;

//Rutas personales
Route::get('/guitar/index2', [GuitarController::class, 'index2'])->name('/guitar/index2');
Route::get('/guitar/import', [GuitarController::class, 'import'])->name('/guitar/import');
Route::post('/guitar/importData', [GuitarController::class, 'importData'])->name('/guitar/importData');
Route::get('/guitar/exportToXlsx', [GuitarController::class, 'exportToXlsx'])-> name ('/guitar/exportToXlsx');
Route::get('/guitar/cards', [GuitarController::class, 'cards'])->name('/guitar/cards');
Route::get('/guitar/chart', [GuitarController::class, 'chart'])->name('/guitar/chart');

Route::get('/contrato/index2', [GuitarController::class, 'index2'])->name('/contrato/index2');
Route::get('/contrato/chart', [ContratoController::class, 'chart'])->name('/contrato/chart');
Route::get('/contrato/cards', [ContratoController::class, 'cards'])->name('/contrato/cards');
Route::get('/contrato/exportToXlsx', [ContratoController::class, 'exportToXlsx'])-> name ('/contrato/exportToXlsx');
Route::get('/contrato/import', [ContratoController::class, 'import'])->name('/contrato/import');
Route::post('/contrato/importData', [ContratoController::class, 'importData'])->name('/contrato/importData');

Route::get('/keyboard/index2', [GuitarController::class, 'index2'])->name('/keyboard/index2');
Route::get('/keyboard/chart', [KeyboardController::class, 'chart'])->name('/keyboard/chart');
Route::get('/keyboard/cards', [KeyboardController::class, 'cards'])->name('/keyboard/cards');
Route::get('/keyboard/exportToXlsx', [KeyboardController::class, 'exportToXlsx'])-> name ('/keyboard/exportToXlsx');
Route::get('/keyboard/import', [KeyboardController::class, 'import'])->name('/keyboard/import');
Route::post('/keyboard/importData', [KeyboardController::class, 'importData'])->name('/keyboard/importData');

Route::get('/saxophonealto/index2', [GuitarController::class, 'index2'])->name('/saxophonealto/index2');
Route::get('/saxophonealto/chart', [SaxophonealtoController::class, 'chart'])->name('/saxophonealto/chart');
Route::get('/saxophonealto/cards', [SaxophonealtoController::class, 'cards'])->name('/saxophonealto/cards');
Route::get('/saxophonealto/exportToXlsx', [SaxophonealtoController::class, 'exportToXlsx'])-> name ('/saxophonealto/exportToXlsx');
Route::get('/saxophonealto/import', [SaxophonealtoController::class, 'import'])->name('/saxophonealto/import');
Route::post('/saxophonealto/importData', [SaxophonealtoController::class, 'importData'])->name('/saxophonealto/importData');

Route::get('/exportToCSV', [GuitarController::class, 'exportToCSV'])->name('/exportToCSV');

Route::get('/exportToCSV', [SaxophonealtoController::class, 'exportToCSV'])->name('/exportToCSV');

Route::get('/exportToCSV', [KeyboardController::class, 'exportToCSV'])->name('/exportToCSV');

Route::get('/exportToCSV', [ContratoController::class, 'exportToCSV'])->name('/exportToCSV');

Route::get('/', function () {

    $information = Information::all();
    $guitar = Guitar::all()->take(4);
    //$user = User::all();;
    return view('welcome')
        ->with('guitar', $guitar)
        ->with('information', $information);        
});


Route::resources([
    'guitar'=> GuitarController::class,
    'saxophonealto' => SaxophonealtoController::class,
    'keyboard' => KeyboardController::class,
    'contrato' => ContratoController::class,
    'users'=> UserController::class,
    'soporte'   => SupportController::class,
    'information'=> InformationController::class,
    'soporte'   => SupportController::class,
    'test'      => TestController::class,
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

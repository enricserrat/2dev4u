<?php

use App\Http\Controllers\ContacteController;
use App\Http\Controllers\CookiesController;
use App\Mail\ContacteMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [CookiesController::class, 'setCookie']);

Route::get('/get-cookie', [CookiesController::class, 'getCookie']);
Route::get('/del-cookie', [CookiesController::class, 'delCookie']);
Route::get('/accept-cookies', [CookiesController::class, 'acceptCookies']);
Route::get('/reject-cookies', [CookiesController::class, 'rejectCookies']);

Route::get('pagines-web', function () {
    return view('pagines-web');
});

Route::get('aplicacions', function () {
    return view('aplicacions');
});

Route::get('ciberseguretat', function () {
    return view('ciberseguretat');
});

Route::get('disseny-ui-ux', function () {
    return view('disseny-ui-ux');
});

Route::get('crm', function () {
    return view('crm');
});

Route::get('seo', function () {
    return view('seo');
});

Route::get('qui-som', function () {
    return view('qui-som');
});

// ruta on l'usuari introdueix les dades del missatge
Route::get('contacte', [ContacteController::class, 'index'])
    ->name('contacte.index');

// ruta on rebem les dades de l'usuari que envia el missatge
Route::post('contacte', [ContacteController::class, 'store'])
    ->name('contacte.store');

// PÀGINES LEGALS
Route::get('politica-privacitat', function () {
    return view('legal.politica-privacitat');
});

Route::get('avis-legal', function () {
    return view('legal.avis-legal');
});

Route::get('politica-cookies', function () {
    return view('legal.politica-cookies');
});

// PÀGINA X DEFECTE DE LARAVEL
Route::get('/welcome', function () {
    return view('welcome');
});

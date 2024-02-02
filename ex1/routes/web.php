<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

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

Route::get('/', function () {
    return view('home');
});


Route::get('/home',[TemplateController::class, 'home']);
Route::get('/store',[TemplateController::class, 'store']);
Route::get('/about',[TemplateController::class, 'about']);
Route::get('/contact',[TemplateController::class, 'contact']);
Route::post('/contact',[TemplateController::class, 'contactForm']);
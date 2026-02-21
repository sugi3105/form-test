<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/', [ContactController::class, 'index'])
      ->name('contact.index');
Route::post('/confirm', [ContactController:: class, 'confirm'])
      ->name('contact.confirm');
Route::post('/thanks', [ContactController::class, 'store'])
      ->name('contact.store');
Route::get('/thanks', [ContactController:: class, 'thanks'])
      ->name('contact.thanks');



//Route::delete('/contact/delete', [ContactController::class, 'destroy']);
Route::middleware('auth')->group(function () {
Route::get('/admin', [ContactController::class, 'admin']);
//Route::get('/', [AuthController::class, 'index']);
 Route::post('/delete', [ContactController::class, 'destroy']);
 });
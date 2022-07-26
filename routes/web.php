<?php

use App\Http\Controllers\GlasseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('shop-page.index');
// })->middleware('auth');
Route::resource('/',GlasseController::class)->middleware('auth');
Route::get('/Glasse/all',[GlasseController::class,'all'])->name('all')->middleware('auth');
Route::get('/Glasse/about',[GlasseController::class,'about'])->name('about')->middleware('auth');
Route::get('/Glasse/contact',[GlasseController::class,'contact'])->name('contact')->middleware('auth');
















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

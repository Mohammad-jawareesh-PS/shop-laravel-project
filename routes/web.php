<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GlasseController;
use App\Mail\MailContact;
use App\Models\Cart;
use Illuminate\Support\Facades\Mail;
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
// });


Route::group(['middleware' => 'auth'], function (){
    Route::resource('/',GlasseController::class);
    Route::get('/Glasse/all',[GlasseController::class,'all'])->name('all');
    Route::get('/Glasse/about',[GlasseController::class,'about'])->name('about');
    Route::get('/Glasse/contact',[GlasseController::class,'contact'])->name('contact');
    Route::post('/mail',function(){
        // $list=request()->validate([
        //     'name'=>'required|name','email'=>'required|email','phoneNumber'=>'required|phoneNumber','message'=>'required|message'
        // ]);
        Mail::to('mohammadjawareesh@gmail.com')->send(new MailContact(request('name'),request('email'),request('phoneNumber'),request('message')));
    return back();
    });
    Route::resource('/add',CartController::class);
});















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

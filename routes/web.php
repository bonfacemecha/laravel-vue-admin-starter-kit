<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\RegisterController;

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
//     return view('welcome');
// });

// Auth
Route::post('login', [AuthController::class,'login']);
Route::post('auth',[AuthController::class,'auth']);
Route::post('logout', [AuthController::class,'logout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/personal-details/store', [RegisterController::class, 'store']);
Route::get('/list/get-applications', [RegisterController::class, 'getApplications']);


Route::get('/{any?}', function () {

    if (Auth::check()) {
         return view('index');
    } else {
         return view('welcome');
    }
  
})->where('any', '.*');

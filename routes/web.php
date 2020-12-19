<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FarmerInformationController;
use App\Http\Middleware\admin;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/farmer-information', [FarmerInformationController::class, 'index']);
    Route::post('/farmer-information', [FarmerInformationController::class, 'store']);

});


Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('logged_in', [LoginController::class, 'login'])->name('logged_in');


Route::middleware([Admin::class])->group(function(){

    Route::get('/admin',function (){
        return view('admin.index');
    });

});

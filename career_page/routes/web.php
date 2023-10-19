<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
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
    return view('welcome');
});
Route::get('/career_page', function () {
    return view('career_page');
});
Route::get('/form', function () {
    return view('formfield');
});

Route::POST('application', [CareerController::class, 'submitApplication']);

// Route::get('/send-otp', function(){
   
// });

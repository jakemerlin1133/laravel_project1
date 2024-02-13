<?php

use App\Http\Controllers\StudentController;
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

// Route::get('/', function(){
//     return view('index');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/', [StudentController::class, 'index']);
Route::get('/register', [StudentController::class, 'create']);

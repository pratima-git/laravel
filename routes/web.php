<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return redirect()->route('student.index');
});
//Route::get('/student',[StudentController::class,'index'])->name('student.index');

Route::resource('student', StudentController::class);
Route::post('/student/email-validate', [StudentController::class, 'check_email'])->name('student.email.validate');

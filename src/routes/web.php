<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('quiz', 'QuizController@index');
Route::get('quiz/{id}', 'QuizController@quiz')->name('quiz');
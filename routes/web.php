<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
use Illuminate\Http\Request;
use App\Models\Applicant;

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
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

route::redirect('/candidato', '/applicant');

Route::get('/applicant', function () {
    return view('applicant');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/vagas', function () {
    return view('vagas');
});

Route::get('/test', function () {
    return view('testes');
});

//Route::post('/applicant', 'ApplicantController@create');

Route::post('/applicant', [ApplicantController::class, 'store']);

Route::get('/index', [ApplicantController::class, 'index']);






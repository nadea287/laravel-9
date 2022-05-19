<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
    //3
//    $result = Str::of('here')->append('i am');
//    $result = str('here')->append('i am');
//    dd($result);
    //4
//    throw new Exception('whoops');

    //5
//    return Blade::render('{{ $greeting }}, World', ['greeting' => 'Hello']);

    return view('welcome');
});

//1
Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index');
    Route::post('/posts', 'store');
    Route::get('/posts/{post}', 'show');
});

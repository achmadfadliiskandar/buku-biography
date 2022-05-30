<?php

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

Route::get('/story',function(){
    return view('story');
});
Route::get('/start',function(){
    return view('start');
});
Route::prefix('/story')->group(function(){
    Route::get('/',function(){
        return view('story.index');
    });
    Route::get('/jhon_dalton',function(){
        return view('story.jhon_dalton');
    });
    Route::get('/perjalanan_hidup_jhon_dalton',function(){
        return view('story.perjalanan_hidup_jhon_dalton');
    });
    Route::get('/teori_atom_jhon_dalton',function(){
        return view('story.teori_atom_jhon_dalton');
    });
    Route::get('/referensi_jhon_dalton',function(){
        return view('story.referensi_jhon_dalton');
    });
    Route::get('/ringkasan_jhon_dalton',function(){
        return view('story.ringkasan_jhon_dalton');
    });
});
Route::get('/credit',function(){
    return view('story.credit');
});
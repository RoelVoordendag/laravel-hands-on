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

Route::get('about', function(){
   return view('about');
});
Route::get('test', function (){

    $task = [
        'kamer opruimen',
        'onderzoeksdocument schrijven',
        'gamen'
    ];

    return view('test',[
        'name' => 'Roel'
    ], compact('task'));
});


<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {

    $call = Http::get('https://yesno.wtf/api');

    $answer = $call->json()['answer'];

    $yesnoimage =  $call->json()['image'];

    return view('welcome', compact('answer', 'yesnoimage'));

});

//Simple route simple blade files:
Route::view('/yes', 'yes');
Route::view('/no', 'no');

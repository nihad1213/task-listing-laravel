<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/show/{taskId}', function ($taskId) {
    return view('show', ['taskId' => $taskId]);
})->where('taskId', '[0-9]+');

Route::post('/create', function () {
    
});

Route::patch('/update/{taskId}', function ($taskId) {
    
})->where('taskId', '[0-9]+');


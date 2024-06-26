<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('trashlist');
});

Route::get('trash', 'TrashController@trash_can');

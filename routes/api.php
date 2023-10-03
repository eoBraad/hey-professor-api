<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => ["O que você faz aqui? 🤔"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

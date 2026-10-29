<?php

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome_2', function () {
    return view('welcomepage');
});

Route::get('/myFirst', function () {
    return view('myproto',[
        "myname" => "Srick",
        "title" => "WELCOME HOME"
    ]);
});

Route::get('/myProject', function () {
    return view('welcomepage',[
    "title" => "MY PROJECTS" ,
    "project" => Project::getProject()
    ]);
});


Route::get('/register', function () {
    return view('welcome',[
        "title" => "CONTACT", 
        "myname" => "sds",
        "email" => ".@email.com"
        ]);
});

Route::get('/myBoard', function () {
    return view('broadchecker');
});

Route::get('/myBoard2', function () {
    return view('broadchecker');
});
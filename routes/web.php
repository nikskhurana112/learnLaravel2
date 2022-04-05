<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;

Route::get("/",[ HomeController::class, 'index' ]);
Route::get("contact",[ HomeController::class, 'contact' ]);


Route::get("insert-post",[ PostController::class , 'insert' ]);
Route::get("list-post",[ PostController::class , 'list' ])->name("post.list");
Route::post("db-post",[ PostController::class , 'savePost' ])->name("post.save");


Route::get("student/list",[StudentController::class,'list']);
Route::get("student/insert",[StudentController::class,'insert']);
Route::post("student/create",[StudentController::class,'create']);



// pph artisan make:controller PostController
// php artisan make:model Post -m
// php artisan migrate
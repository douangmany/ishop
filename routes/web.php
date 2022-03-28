<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminReportController;
use App\Http\Controllers\AdminHomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book',[AdminHomeController::class,"Index"])->name('book');
Route::get('book/add',[AdminHomeController::class,"Form"]) ->name('book.add');
Route::post('book/store',[AdminHomeController::class,"Store"]) ->name('book.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//============Routh member====================

Route::get('/member', [MemberHomeController::class, 'Index'])->name('member.home');


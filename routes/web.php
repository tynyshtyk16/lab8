<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Form;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('forms',[FormsController::class, 'index']);

Route::get('forms/create',function(){
    return view('form.create');
});

// Route::post('forms/create', [FormsController::class, 'store'])->name('add-blog');

Route::get('/home',[FormsController::class, 'indexx'])->name('home');
Route::post('/storee', [FormsController::class, 'storee'])->name('storee');
// Route::get('/home',[FormsController::class, 'indexx']);
 Route::get('/sent-email',[MailController::class,'sendEmail']);
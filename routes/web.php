<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'landing'])->name('landing');
Route::get('services', [PagesController::class, 'services'])->name('services');
Route::get('projects', [PagesController::class, 'projects'])->name('projects');
Route::get('projects/{project}', [PagesController::class, 'project'])->name('project');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');
Route::post('send-mail', ContactController::class)->name('sendMail');

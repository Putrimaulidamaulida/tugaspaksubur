<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateWebController; 
use App\Http\Controller\CrudPersegiController;
Route::get('/', function () {
    return view('belajarlaravel1');
});
Route::get('template', [TemplateWebController::class,'showHome'])->name('template.home');
Route::get('template/home', [TemplateWebController::class,'showHome'])-> name('template.home');
Route::get('template/about', [TemplateWebController::class,'showAbout'])->name('template.about');
Route::get('/crudpersegi',
[CrudPersegiController::class, 'index'])->
name('crudpersegi.index');
Route::get('/crudpersegi/create',
[CrudPersegiController::class, 'create'])->
name('crudpersegi.create');
Route::post('/crudpersegi/store',
[CrudPersegiController::class, 'store'])->
name('crudpersegi.store');
Route::get('/crudpersegi/edit/{id}',
[CrudPersegiController::class, 'edit'])->
name('crudpersegi.edit');
Route::put('/crudpersegi/update/{id}',
[CrudPersegiController::class, 'update'])->
name('crudpersegi.update');
Route::delete('/crudpersegi/delete/{id}',
[CrudPersegiController::class, 'destroy'])->
name('crudpersegi.destroy');
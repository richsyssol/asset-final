<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroItemController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Api\IntroductionController;
use App\Http\Controllers\Api\CorporateServiceController;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\FaqController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/hero-slides', function() {
    return \App\Models\HeroSlide::where('is_active', true)
        ->orderBy('order', 'asc')
        ->get();
});



Route::get('/api/hero-items', [HeroController::class, 'index']);
Route::get('/api/services', [ServiceController::class, 'index']);
Route::get('/api/introduction', [IntroductionController::class, 'index']);
Route::get('/api/corporate-services', [CorporateServiceController::class, 'index']);
Route::get('/api/corporate-services/{slug}', [CorporateServiceController::class, 'show']);
Route::get('/api/hero-items/{id}/image', [HeroItemController::class, 'showImage']);
Route::get('/api/hero-items', [HeroItemController::class, 'index']);
Route::get('/api/departments', [DepartmentController::class, 'index']);
Route::get('/api/faqs', [FaqController::class, 'index']);





// routes/api.php



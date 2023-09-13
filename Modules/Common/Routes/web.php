<?php

use Illuminate\Support\Facades\Route;
use Modules\Common\Http\Controllers\PartnerController;
use Modules\Common\Http\Controllers\SettingController;
use Modules\Common\Http\Controllers\SliderController;
use Modules\Common\Http\Controllers\TeamController;
use Modules\Common\Http\Controllers\TestimonialController;
use Modules\Common\Http\Controllers\LanguageController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:admin']], function () {
    Route::resource('setting', SettingController::class)->except(['create', 'store', 'show', 'update']);
    Route::resource('slider', SliderController::class)->except(['show']);
    Route::resource('testimonial', TestimonialController::class)->except(['show']);
    Route::resource('partner', PartnerController::class)->except(['show']);
    Route::resource('team', TeamController::class)->except(['show']);
    Route::put('setting/update', [SettingController::class, 'update'])->name('setting.update');
    Route::get('/change-lang/{lang}', [LanguageController::class, 'change']);
});

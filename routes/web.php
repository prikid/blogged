<?php

use Illuminate\Support\Facades\Route;

// Dashboard route (SPA)..
Route::view(config('blogged.routes.dashboard') . '/{page?}', 'blogged::dashboard.index')->where('page', '.*')->middleware('blogged-back');

// Blog routes..
Route::get(config('blogged.routes.blog') . '/{category?}', 'BlogController@index')->name('index');

// Dynamic model matching..
Route::get(config('blogged.routes.blog') . '/{category}/{article}/{amp?}', 'BlogController@show')
//    ->where('article', '.*')
	->where('amp', 'amp')
	->name('show');

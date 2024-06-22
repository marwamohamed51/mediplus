<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

        Route::get('/', function () {
            return view('test');
        });

        Route::get('home', [Frontpages::class, 'home'])->name('home');
        Route::get('error404', [Frontpages::class, 'error404'])->name('error404');
        Route::get('portfolio', [Frontpages::class, 'portfolio'])->name('portfolio');
        Route::get('contact', [Frontpages::class, 'contact'])->name('contact');
        Route::get('blog', [Frontpages::class, 'blog'])->name('blog');
        Route::get('services', [Frontpages::class, 'services'])->name('services');

    });
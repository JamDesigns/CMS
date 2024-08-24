<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactControler;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostUserController;
use App\Http\Controllers\SearchController;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Dashboard
Route::permanentRedirect('/dashboard', '/' . Filament::getPanel()->getPath())->name('dashboard');

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
        'web'
    ]
], function() {
    Route::permanentRedirect('/', '/home');
    Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
    Route::post('/posts/{post:slug}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/{user:name}/posts', [PostUserController::class, 'index'])->name('posts.user');
    Route::get('/contact-us', [ContactControler::class, 'create'])->name('contact.create');
    Route::post('/contact-us', [ContactControler::class, 'store'])->name('contact.store');

    // Search results
    Route::post('/search', [SearchController::class, 'index'])->name('search');

    // Generated pages
    Route::get('/{page}', [PageController::class, 'show']);
});

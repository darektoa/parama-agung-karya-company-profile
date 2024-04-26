<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);


/**
 * AUTH
 */
Route::prefix('/auth')->group(function() {
    Route::prefix('/signIn')->group(function() {
        Route::get('/', [Auth\SignInController::class, 'index'])->name('signIn');
        Route::post('/', [Auth\SignInController::class, 'store'])->name('signIn.post');
    });

    Route::prefix('/signOut')->group(function() {
        // Route::delete('/', [Auth\SignOutController::class, 'destroy'])->name('signOut.delete');
    });
});


/**
 * DASHBOARD
 */
Route::prefix('/dashboard')->group(function() {
    Route::get('/', [Dashboard\HomeController::class, 'index'])->name('dashboard.home');
    
    Route::prefix('/contents')->group(function() {
        Route::get('/', [Dashboard\ContentController::class, 'index'])->name('dashboard.content');
        Route::get('/{contentId}', [Dashboard\ContentController::class, 'show'])->name('dashboard.content.byContentId');
        Route::put('/{contentId}', [Dashboard\ContentController::class, 'update'])->name('dashboard.content.byContentId.put');
    });
    
    Route::prefix('/blogs')->group(function() {
        Route::get('/', [Dashboard\BlogController::class, 'index'])->name('dashboard.blog');
        Route::get('/{blogId}', [Dashboard\BlogController::class, 'show'])->name('dashboard.blog.byContentId');
        Route::put('/{blogId}', [Dashboard\BlogController::class, 'update'])->name('dashboard.blog.byContentId.put');
    });
});


/**
 * BLOGS
 */
Route::prefix('/blogs')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('blogs');
    Route::get('/{blogId}', [BlogController::class, 'show'])->name('blogs.byBlogId');
});


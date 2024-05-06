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
    
    Route::prefix('/blogs')->group(function() {
        Route::get('/', [Dashboard\BlogController::class, 'index'])->name('dashboard.blog');
        Route::post('/', [Dashboard\BlogController::class, 'store'])->name('dashboard.blog.post');
        Route::get('/create', [Dashboard\BlogController::class, 'create'])->name('dashboard.blog.create');

        // BY BLOG ID
        Route::prefix('/{blogId}')->group(function() {
            Route::get('/', [Dashboard\BlogController::class, 'show'])->name('dashboard.blog.byBlogId');
            Route::put('/', [Dashboard\BlogController::class, 'update'])->name('dashboard.blog.byBlogId.put');
            Route::delete('/', [Dashboard\BlogController::class, 'destroy'])->name('dashboard.blog.byBlogId.delete');
            Route::get('/edit', [Dashboard\BlogController::class, 'edit'])->name('dashboard.blog.byBlogId.edit');
        });
    });
    
    Route::prefix('/contents')->group(function() {
        Route::get('/', [Dashboard\ContentController::class, 'index'])->name('dashboard.content');
        Route::get('/{contentId}', [Dashboard\ContentController::class, 'show'])->name('dashboard.content.byContentId');
        Route::put('/{contentId}', [Dashboard\ContentController::class, 'update'])->name('dashboard.content.byContentId.put');
    });
    
    Route::prefix('/portfolios')->group(function() {
        Route::get('/', [Dashboard\portfolioController::class, 'index'])->name('dashboard.portfolio');
        Route::post('/', [Dashboard\portfolioController::class, 'store'])->name('dashboard.portfolio.post');
        Route::get('/create', [Dashboard\portfolioController::class, 'create'])->name('dashboard.portfolio.create');
        
        // BY PORTFOLIO ID
        Route::prefix('/{portfolioId}')->group(function() {
            Route::get('/', [Dashboard\portfolioController::class, 'show'])->name('dashboard.portfolio.byPortfolioId');
            Route::put('/', [Dashboard\portfolioController::class, 'update'])->name('dashboard.portfolio.byPortfolioId.put');
            Route::delete('/', [Dashboard\portfolioController::class, 'destroy'])->name('dashboard.portfolio.byPortfolioId.delete');
            Route::get('/edit', [Dashboard\portfolioController::class, 'edit'])->name('dashboard.portfolio.byPortfolioId.edit');
        });
    });
});


/**
 * BLOGS
 */
Route::prefix('/blogs')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('blogs');
    Route::get('/{blogId}', [BlogController::class, 'show'])->name('blogs.byBlogId');
});


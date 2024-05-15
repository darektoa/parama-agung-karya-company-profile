<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);



/**
 * BLOGS
 */
Route::prefix('/blogs')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('blogs');
    Route::get('/{blogId}', [BlogController::class, 'show'])->name('blogs.byBlogId');
});



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
Route::prefix('/dashboard')->name('dashboard')->group(function() {
    Route::get('/', [Dashboard\HomeController::class, 'index'])->name('.home');
    

    // DASHBOARD/BLOGS
    Route::prefix('/blogs')->name('.blog')->group(function() {
        Route::get('/', [Dashboard\BlogController::class, 'index']);
        Route::post('/', [Dashboard\BlogController::class, 'store'])->name('.post');
        Route::get('/create', [Dashboard\BlogController::class, 'create'])->name('.create');

        // DASHBOARD/BLOGS/BY_BLOG_ID
        Route::prefix('/{blogId}')->name('.byBlogId')->group(function() {
            Route::get('/', [Dashboard\BlogController::class, 'show']);
            Route::put('/', [Dashboard\BlogController::class, 'update'])->name('.put');
            Route::delete('/', [Dashboard\BlogController::class, 'destroy'])->name('.delete');
            Route::get('/edit', [Dashboard\BlogController::class, 'edit'])->name('.edit');
        });
    });
    

    // DASHBOARD/BANNERS
    Route::prefix('/banners')->name('.banners')->group(function() {
        Route::get('/', [Dashboard\BannerController::class, 'index']);
        Route::post('/', [Dashboard\BannerController::class, 'store'])->name('.post');
        Route::get('/create', [Dashboard\BannerController::class, 'create'])->name('.create');

        // DASHBOARD/BANNERS/BY_BANNER_ID
        Route::prefix('/{bannerId}')->name('.byBannerId')->group(function() {
            Route::get('/', [Dashboard\BannerController::class, 'show']);
            Route::put('/', [Dashboard\BannerController::class, 'update'])->name('.put');
            Route::delete('/', [Dashboard\BannerController::class, 'destroy'])->name('.delete');
            Route::get('/edit', [Dashboard\BannerController::class, 'edit'])->name('.edit');
        });
    });
    

    // DASHBOARD/CERTIFICATES
    Route::prefix('/certificates')->name('.certificates')->group(function() {
        Route::get('/', [Dashboard\CertificateController::class, 'index']);
        Route::post('/', [Dashboard\CertificateController::class, 'store'])->name('.post');
        Route::get('/create', [Dashboard\CertificateController::class, 'create'])->name('.create');

        // DASHBOARD/CERTIFICATES/BY_CERTIFICATE_ID
        Route::prefix('/{certificateId}')->name('.byCertificateId')->group(function() {
            Route::get('/', [Dashboard\CertificateController::class, 'show']);
            Route::put('/', [Dashboard\CertificateController::class, 'update'])->name('.put');
            Route::delete('/', [Dashboard\CertificateController::class, 'destroy'])->name('.delete');
            Route::get('/edit', [Dashboard\CertificateController::class, 'edit'])->name('.edit');
        });
    });
    

    // DASHBOARD/CLIENTS
    Route::prefix('/clients')->name('.clients')->group(function() {
        Route::get('/', [Dashboard\ClientController::class, 'index']);
        Route::post('/', [Dashboard\ClientController::class, 'store'])->name('.post');
        Route::get('/create', [Dashboard\ClientController::class, 'create'])->name('.create');

        // DASHBOARD/CLIENTS/BY_CLIENT_ID
        Route::prefix('/{clientId}')->name('.byClientId')->group(function() {
            Route::get('/', [Dashboard\ClientController::class, 'show']);
            Route::put('/', [Dashboard\ClientController::class, 'update'])->name('.put');
            Route::delete('/', [Dashboard\ClientController::class, 'destroy'])->name('.delete');
            Route::get('/edit', [Dashboard\ClientController::class, 'edit'])->name('.edit');
        });
    });
    

    // DASHBOARD/CONTENTS
    Route::prefix('/contents')->name('.content')->group(function() {
        Route::get('/', [Dashboard\ContentController::class, 'index']);
        Route::get('/{contentId}', [Dashboard\ContentController::class, 'show'])->name('.byContentId');
        Route::put('/{contentId}', [Dashboard\ContentController::class, 'update'])->name('.byContentId.put');
    });
    

    // DASHBOARD/PORTFOLIOS
    Route::prefix('/portfolios')->name('.portfolio')->group(function() {
        Route::get('/', [Dashboard\PortfolioController::class, 'index']);
        Route::post('/', [Dashboard\PortfolioController::class, 'store'])->name('.post');
        Route::get('/create', [Dashboard\PortfolioController::class, 'create'])->name('.create');
        
        // DASHBOARD/PORTFOLIOS/BY_PORTFOLIO_ID
        Route::prefix('/{portfolioId}')->name('.byPortfolioId')->group(function() {
            Route::get('/', [Dashboard\PortfolioController::class, 'show']);
            Route::put('/', [Dashboard\PortfolioController::class, 'update'])->name('.put');
            Route::delete('/', [Dashboard\PortfolioController::class, 'destroy'])->name('.delete');
            Route::get('/edit', [Dashboard\PortfolioController::class, 'edit'])->name('.edit');
        });
    });
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])
    ->name('index');

Route::get('/index-2', [HomeController::class, 'index_2'])
    ->name('index-2');

Route::get('/index-3', [HomeController::class, 'index_3'])
    ->name('index-3');

Route::get('/index-4', [HomeController::class, 'index_4'])
    ->name('index-4');

Route::get('/about', [PagesController::class, 'about'])
    ->name('about');

Route::get('/services', [PagesController::class, 'services'])
    ->name('services');

Route::get('/construction', [PagesController::class, 'construction'])
    ->name('construction');

Route::get('/interior-design', [PagesController::class, 'interior_design'])
    ->name('interior-design');

Route::get('/land-surveying', [PagesController::class, 'land_surveying'])
    ->name('land-surveying');

Route::get('/team', [PagesController::class, 'team'])
    ->name('team');

Route::get('/team-details', [PagesController::class, 'team_details'])
    ->name('team-details');

Route::get('/portfolio', [PagesController::class, 'portfolio'])
    ->name('portfolio');

Route::get('/portfolio-details', [PagesController::class, 'portfolio_details'])
    ->name('portfolio-details');

Route::get('/blog', [PagesController::class, 'blog'])
    ->name('blog');

Route::get('/blog-details', [PagesController::class, 'blog_details'])
    ->name('blog-details');

Route::get('/faq', [PagesController::class, 'faq'])
    ->name('faq');

Route::get('/contact', [PagesController::class, 'contact'])
    ->name('contact');

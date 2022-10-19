<?php

use App\Http\Controllers\Administrator\AboutController;
use App\Http\Controllers\Administrator\BlogController;
use App\Http\Controllers\Administrator\CommentController;
use App\Http\Controllers\Administrator\ContactContoller;
use App\Http\Controllers\Administrator\CounterController;
use App\Http\Controllers\Administrator\FaqController;
use App\Http\Controllers\Administrator\HeroController;
use App\Http\Controllers\Administrator\IntroController;
use App\Http\Controllers\Administrator\PanelController;
use App\Http\Controllers\Administrator\ProjectController;
use App\Http\Controllers\Administrator\SeoController;
use App\Http\Controllers\Administrator\ServiceController;
use App\Http\Controllers\Administrator\TeamController;
use App\Http\Controllers\Administrator\TestimonialController;
use App\Http\Controllers\Administrator\TopHeaderController;
use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;



// Frontend

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'contact'])->name('contact.ajax');
Route::post('/comment', [HomeController::class, 'comment'])->name('comment.ajax');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [HomeController::class, 'blogDetail'])->name('blogDetail');


// Backend

Route::get('/dashboard', [PanelController::class, 'info'])->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'admin'])->resource('/dashboard/users', UserController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/seo', SeoController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/topheader', TopHeaderController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/hero', HeroController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/about', AboutController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/intro', IntroController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/service', ServiceController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/counter', CounterController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/team', TeamController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/project', ProjectController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/testimonial', TestimonialController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/blog', BlogController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/contact', ContactContoller::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/faq', FaqController::class);
Route::middleware(['auth', 'admin'])->resource('/dashboard/comment', CommentController::class);

require __DIR__ . '/auth.php';

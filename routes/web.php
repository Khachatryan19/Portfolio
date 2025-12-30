<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin Routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
    
    // Portfolio Data
    Route::get('/portfolio', [App\Http\Controllers\Admin\PortfolioAdminController::class, 'edit'])->name('admin.portfolio.edit');
    Route::put('/portfolio', [App\Http\Controllers\Admin\PortfolioAdminController::class, 'update'])->name('admin.portfolio.update');
    
    // Technologies
    Route::resource('technologies', App\Http\Controllers\Admin\TechnologyAdminController::class)->names([
        'index' => 'admin.technologies.index',
        'create' => 'admin.technologies.create',
        'store' => 'admin.technologies.store',
        'edit' => 'admin.technologies.edit',
        'update' => 'admin.technologies.update',
        'destroy' => 'admin.technologies.destroy',
    ]);
    
    // Projects
    Route::resource('projects', App\Http\Controllers\Admin\ProjectAdminController::class)->names([
        'index' => 'admin.projects.index',
        'create' => 'admin.projects.create',
        'store' => 'admin.projects.store',
        'edit' => 'admin.projects.edit',
        'update' => 'admin.projects.update',
        'destroy' => 'admin.projects.destroy',
    ]);
    
    // Contacts
    Route::resource('contacts', App\Http\Controllers\Admin\ContactAdminController::class)->names([
        'index' => 'admin.contacts.index',
        'create' => 'admin.contacts.create',
        'store' => 'admin.contacts.store',
        'edit' => 'admin.contacts.edit',
        'update' => 'admin.contacts.update',
        'destroy' => 'admin.contacts.destroy',
    ]);
});

<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactUsersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\OnlineDarsController;
use App\Http\Controllers\Admin\PreferenceController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ProtectController;
use App\Http\Controllers\Admin\RivalController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\TypeSiteController;
use App\Http\Controllers\AdminEditController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/lang/{locale}', [LangController::class, 'change'])->name('change.lang');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/header', HeaderController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/project', ProjectsController::class);
    Route::resource('/prefer', PreferenceController::class);
    Route::resource('/media', MediaController::class);
    Route::resource('/education', EducationController::class);
    Route::resource('/rival', RivalController::class);
    Route::resource('/protect', ProtectController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/lesson', OnlineDarsController::class);
    Route::resource('/type_site', TypeSiteController::class);
    Route::resource('/site', SiteController::class);
    Route::resource('/contact', ContactController::class);
    Route::get('/contact-users', [ContactUsersController::class, 'getUsers'])->name('contact-user');
    Route::delete('/contact-users-delete/{id}', [ContactUsersController::class, 'deleteUser'])->name('delete-user');
    Route::get('/admin-edit/{id}', [AdminEditController::class, 'edit'])->name('admin.edit');
    Route::put('/admin-update/{id}', [AdminEditController::class, 'update'])->name('admin.update');
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::get('/admin-show', [AdminEditController::class, 'index'])->name('admin.show');
    Route::get('/error', function () {
        return view('admin.error');
    })->name('admin.error');
});
Auth::routes();

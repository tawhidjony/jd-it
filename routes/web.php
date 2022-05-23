<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Livewire\Contact\Contact;
use App\Http\Livewire\Profile\Profile;
use App\Http\Livewire\Setting\Settings;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('frontend.home'); })->name('/');
Route::get('/product', [ProductController::class, 'index'])->name('product.index');



Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'check_permission'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/settings', Settings::class)->name('settings');
        Route::get('/profile', Profile::class)->name('profile');
        Route::get('/contact', Contact::class)->name('contact');
        Route::resource('roles', RoleController::class);
        Route::resource('roles', RoleController::class);
    });
});

require __DIR__.'/auth.php';


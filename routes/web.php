<?php

use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Livewire\Career\CareerComponent;
use App\Http\Livewire\Contact\ContactComponent;
use App\Http\Livewire\NewsLetter\NewsLetterComponent;
use App\Http\Livewire\Partner\PartnerComponent;
use App\Http\Livewire\Portfolio\PortfolioComponent;
use App\Http\Livewire\Profile\Profile;
use App\Http\Livewire\Setting\Settings;
use App\Http\Livewire\Slider\SliderComponent;
use App\Http\Livewire\Testimonial\TestimonialComponent;
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

Route::get('/', [HomePageController::class,'index'])->name('/');
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/career', [CareerController::class, 'career_job'])->name('career');
Route::post('/news-letter', [HomePageController::class, 'newsLetter'])->name('newsLetter.store');



Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'check_permission'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/sliders', SliderComponent::class)->name('slider.index');
        Route::get('/portfolios', PortfolioComponent::class)->name('portfolio.index');
        Route::get('/testimonials', TestimonialComponent::class)->name('testimonial.index');
        Route::get('/partners', PartnerComponent::class)->name('partner.index');
        Route::get('/contacts', ContactComponent::class)->name('contact.list');
        Route::get('/news-letters', NewsLetterComponent::class)->name('news_letters.index');
        Route::get('/careers', CareerComponent::class)->name('career.index');
        Route::get('/careers/create', [CareerController::class, 'create'])->name('career.create');
        Route::post('/careers/store', [CareerController::class, 'store'])->name('career.store');
        Route::post('/ckeditor/upload', [CareerController::class, 'ckeditorUploadImage'])->name('ckeditor.upload');
        Route::get('/settings', Settings::class)->name('settings');
        Route::get('/profile', Profile::class)->name('profile');
        Route::resource('roles', RoleController::class);
    });
});

require __DIR__.'/auth.php';


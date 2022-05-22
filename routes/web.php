<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\FormController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\Admin\TelephoneController;
use \App\Http\Controllers\Admin\AddressController;
use \App\Http\Controllers\Admin\EmailController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\Admin\HomeSliderController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news/{id}', [NewsController::class, 'getNews'])->name('news.single');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/service/{id}', [ServicesController::class, 'getService'])->name('service');

Route::get('/services', [ServicesController::class, 'index']);

Route::get('/support', [SupportController::class, 'index']);

Route::get('/support/{id}', [SupportController::class, 'getSupport'])->name('support');

Route::get('/knowledge', [KnowledgeController::class, 'index']);

Route::get('/solutions', [SolutionsController::class, 'index']);

Route::get('/calendar', [CalendarController::class, 'index']);

Route::get('/contacts', [ContactsController::class, 'index']);

Route::post('/form', [FormController::class, 'getForm'])->name('form');

Route::prefix('admin')->group(function (){
    Route::get('/', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function(){
    Route::prefix('admin')->group(function (){
        Route::get('contacts', [AdminController::class, 'contacts']);

        Route::resource('home-slider', HomeSliderController::class);

        Route::resource('news', \App\Http\Controllers\Admin\NewsController::class);

        Route::get('news-all', [\App\Http\Controllers\Admin\NewsController::class, 'showAll'])->name('news.show-all');

        Route::resource('services', \App\Http\Controllers\Admin\ServicesController::class);

        Route::get('services-all', [\App\Http\Controllers\Admin\ServicesController::class, 'showAll'])->name('services.show-all');

        Route::resource('support', \App\Http\Controllers\Admin\SupportController::class);

        Route::get('support-all', [\App\Http\Controllers\Admin\SupportController::class, 'showAll'])->name('support.show-all');

        Route::resource('knowledge', \App\Http\Controllers\Admin\KnowledgeController::class);

        Route::resource('solutions', \App\Http\Controllers\Admin\SolutionsController::class);

        Route::resource('forms', FormController::class);

        Route::get('logout', [AuthController::class, 'logout']);
    });
});

Route::post('get-telephone', [TelephoneController::class, 'getTelephone']);

Route::post('get-address', [AddressController::class, 'getAddress']);

Route::post('get-email', [EmailController::class, 'getEmail']);

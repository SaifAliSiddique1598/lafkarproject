<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioManagementController;
use App\Http\Controllers\Admin\TradesManagementController;
use App\Http\Controllers\Admin\ProfileManagementController;
use App\Http\Controllers\Admin\TickerController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\FaqsManagementController;
use App\Http\Controllers\Admin\TradesRequestController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\RegisterController;
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
 
Auth::routes();

// group for Admin

Route::prefix('admin')->name('admin.')
    ->middleware(['auth', 'role']) 
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
        // Portfolio Management
        Route::get('/portfolio-management', [PortfolioManagementController::class, 'index'])->name('portfolio.management');
    
        // Trades Management
        Route::resource('/trades-management', TradesManagementController::class);
        Route::get('/trades-management/get-trades/{userId}', [TradesManagementController::class, 'getTrades']);
    
        // Profile Management
        Route::resource('/profile-management', ProfileManagementController::class);
    
        // Ticker And Banner Management
        Route::get('ticker-and-banner-management', [BannerController::class, 'index'])->name('ticker-and-banner.index');
        Route::post('/tickers/updateStatus', [TickerController::class, 'updateStatus'])->name('tickers.updateStatus');
        Route::post('/banners/updateStatus', [BannerController::class, 'updateStatus'])->name('banners.updateStatus');
        Route::resource('/tickers', TickerController::class);
        Route::resource('/banners', BannerController::class);
    
        // Knowledgebase Management
        Route::resource('/faqs-management', FaqsManagementController::class);
    
        // Trade Request
        Route::resource('/traders-request', TradesRequestController::class);
    
        Route::get('/{any}', [DashboardController::class, 'page'])->name('page');
    });

// group for Frontend
Route::prefix('frontend')->name('frontend.')
    ->group(function () {
        Route::get('/', [FrontendController::class, 'index'])->name('index');
        Route::get('/{any}', [FrontendController::class, 'page'])->name('page');
        Route::post('/trade/store', [FrontendController::class, 'store'])->name('trade.store');
        Route::post('/support/store', [FrontendController::class, 'supportStore'])->name('support.store');
        Route::post('/profile/update', [FrontendController::class, 'profileUpdate'])->name('profile.update');
        Route::post('/change-password/update', [FrontendController::class, 'updatePassword'])->name('update-password');
    });



//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [FrontendController::class, 'index'])->name('root');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
//Route::get('/home/index', [App\Http\Controllers\HomeController::class, 'indexPage'])->name('indexPage');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

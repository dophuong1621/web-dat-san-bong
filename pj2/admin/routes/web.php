<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QLHTController;
use App\Http\Controllers\QLTTDSController;
use App\Http\Controllers\QLTTDS1Controller;
use App\Http\Controllers\QLDTController;
use App\Http\Middleware\CheckLogged;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckLoggedU;
use App\Http\Middleware\CheckLogginU;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoAdminController;
use App\Http\Controllers\User_Login_Controller;

//login
Route::middleware([CheckLogged::class])->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login-process', [AdminController::class, 'login_process'])->name('login-process');
});

Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::resource('quan-ly-san-bong', HomeController::class);
    Route::resource('quan-ly-he-thong', QLHTController::class);
    // Route::resource('thong-tin-dat-san/chua-duyet', QLTTDSController::class);

    // doanh thu
    Route::get('quan-ly-doanh-thu/san-bong', [QLDTController::class, 'sb'])->name('quan-ly-doanh-thu.sb');
    Route::get('quan-ly-doanh-thu/khu-vuc', [QLDTController::class, 'kv'])->name('quan-ly-doanh-thu.kv');
    Route::get('quan-ly-doanh-thu/da-dat', [QLDTController::class, 'dd'])->name('quan-ly-doanh-thu.dd');
    Route::get('quan-ly-doanh-thu/thue-nhieu-nhat', [QLDTController::class, 'tnn'])->name('quan-ly-doanh-thu.tnn');

    //thongtindatsan
    // Route::resource('quan-ly-thong-tin-dat-san/da-duyet', QLTTDS1Controller::class);
    // Route::resource('quan-ly-thong-tin-dat-san/chua-duyet', QLTTDSController::class);

    Route::name('thong-tin-dat-san/da-duyet.')->group(function () {
        Route::get('thong-tin-dat-san/da-duyet/index', [QLTTDS1Controller::class, 'index'])->name('index');
    });

    Route::name('thong-tin-dat-san/chua-duyet.')->group(function () {
        Route::get('thong-tin-dat-san/chua-duyet/index', [QLTTDSController::class, 'index'])->name('index');
        Route::get('thong-tin-dat-san/chua-duyet/{MaI}/edit', [QLTTDSController::class, 'edit'])->name('edit');
        Route::post('thong-tin-dat-san/chua-duyet/{MaI}', [QLTTDSController::class, 'update'])->name('update');
        // Route::get('thong-tin-dat-san/chua-duyet/{MaI}', [QLTTDSController::class, 'create'])->name('create');
        // Route::post('thong-tin-dat-san/chua-duyet/{MaI}', [QLTTDSController::class, 'store'])->name('store');
        Route::get('thong-tin-dat-san/chua-duyet/show/{MaI}', [QLTTDSController::class, 'show'])->name('show');
        Route::get('thong-tin-dat-san/chua-duyet/{MaI}', [QLTTDSController::class, 'destroy'])->name('destroy');
    });



    Route::resource('info-admin', InfoAdminController::class);
});

// Route::middleware([CheckLoggedU::class])->group(function () {
//     Route::get('/login-user', [User_Login_Controller::class, 'login'])->name('login-user');
//     Route::post('/login-user-process', [User_Login_Controller::class, 'login_process'])->name('login-user-process');
// });

// Route::middleware([CheckLogginU::class])->group(function () {
//     Route::get('/home', function () {
//         return view('home');
//     })->name('home');

//     Route::get('/logout-user', [AdminController::class, 'logout'])->name('logout-user');
// });
// quản lý sidebar

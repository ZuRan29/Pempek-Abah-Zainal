<?php

use App\Http\Controllers\Broadcast\AllController;
use App\Http\Controllers\Broadcast\ChatApiControlller;
use App\Http\Controllers\Broadcast\WhatsappController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\MenuController;
use Facade\FlareClient\View;
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



// Landing Page
Route::get('/', function () {
    return view('layouts.landingpage.menu');
});

// Dashboard Admin
    Route::get('admin/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('admin/dashboard/menu', 'Dashboard\MenuController');
    
// Merkury Chat
    Route::get('dashboard-blast/whatsapp', function () {
        return view('whatsapp.forms');
    });
    Route::post('dashboard-blast/whatsapp/send', [WhatsappController::class, 'index'])->name('whatsapp.post');
    // Get All Chat
    Route::get('dashboard-blast/all-chat', [AllController::class, 'index']);
    // BroadCast
    Route::get('dashboard-blast/broadcast', function() {
        return view('whatsapp.broadcast');
    });

// Chat-API
    Route::get('dashboard-blast/chat-api', function () {
        return view('whatsapp.chat-api');
    });
    Route::post('dashboard-blast/chat-api/send', [ChatApiControlller::class, 'index'])->name('chat-api.send');

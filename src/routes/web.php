<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoginController;

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

Route::get('/', [RoginController::class, 'index']);
Route::post('/rogins/confirm', [RoginController::class, 'confirm']);
// 送信ボタンクリック時のルーティング
Route::post('/rogins', [RoginController::class, 'store']);

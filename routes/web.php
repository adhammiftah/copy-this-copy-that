<?php

use App\Http\Controllers\ClipboardsController;
use App\Models\Clipboard;
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

Route::get('/', [ClipboardsController::class, 'create']);
Route::post('/store', [ClipboardsController::class, 'store']);
Route::get('/{clipboard}', [ClipboardsController::class, 'show']);

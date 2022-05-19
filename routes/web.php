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

// Route::get('/', function () {

//     $config = [
//         'table'=>'clipboards',
//         'length'=>6,
//         'prefix'=>''
//     ];

//     return view('welcome');
// });

Route::get('/', [ClipboardsController::class, 'index']);

Route::post('/store', [ClipboardsController::class, 'store']);

Route::get('/clips/{clipboard}/successful', [ClipboardsController::class, 'successful']);

Route::get('/viewall', [ClipboardsController::class, 'viewAll']);

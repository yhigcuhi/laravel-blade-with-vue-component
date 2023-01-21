<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;

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

// org
//Route::get('/', function () {
//    return view('welcome');
//});

// 画面の一覧
Route::get('/', fn() => view('pages.dashboard')->with(['hoge' => 'TEST']));
Route::get('/players', [PlayersController::class, 'index'])->name('page.players'); // Mリーガー 一覧
// ↓ sample
Route::get('/table', fn() => view('pages.table')->with(['hoge' => 'TEST']))->name('page.table');
Route::get('/cards', fn() => view('pages.cards')->with(['hoge' => 'TEST']))->name('page.cards');

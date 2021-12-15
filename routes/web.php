<?php

use App\Http\Controllers\SoapController;
use App\Http\Controllers\View3dController;
use App\Http\Controllers\XmlController;
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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Test 1
 */
Route::prefix('xml')->group(function () {
    Route::get('parse', [XmlController::class, 'parseData']);
    Route::get('bet-amount', [XmlController::class, 'betAmounts']);

    /**
     * Result
     */
    Route::get('amount-sum', [XmlController::class, 'betAmountSum'])->name('test1');
});

/**
 * Test 2
 */
Route::prefix('soap')->group(function () {
    Route::get('all-users', [SoapController::class, 'parseData']);

    /**
     * Result
     */
    Route::get('expected-users', [SoapController::class, 'users'])->name('test2');
});

/**
 * Test 3
 */
Route::prefix('mvc')->group(function () {

    /**
     * Result
     */
    Route::get('view3d', [View3dController::class, 'getData'])->name('test3');
});

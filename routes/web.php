<?php

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

// Route::namespace('Test')->group(function() {
//     Route::get('/test/test{testId}', 'Test@Test');
// });

Route::namespace('Front')->group(function() {
    Route::get('/', 'Index@Index')->name('index');
});

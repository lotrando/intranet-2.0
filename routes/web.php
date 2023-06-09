<?php

use App\Http\Controllers\UserController;
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
    return view('index', [
        'title'             => 'Index',
        'personal_number'   => '61625',
        'title_preffix'     => 'MUDr.',
        'last_name'         => 'Klika',
        'first_name'        => 'Miroslav',
        'title_suffix'      => null,
        'funkce'            => 'Vývojář, webmaster'
    ]);
})->name('index');

Route::prefix('admin')->group(function () {
    Route::resource('user', UserController::class);
});

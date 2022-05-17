<?php

use App\Http\Controllers\OrganizationController;
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

Route::multilingual('/organizations', [OrganizationController::class, 'index'])
    ->name('organizations.index');

Route::multilingual('/organizations/{organization}', [OrganizationController::class, 'show'])
    ->name('organizations.show');

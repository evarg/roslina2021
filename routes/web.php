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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('seeds', 'App\Http\Controllers\SeedController')->except([
    'create', 'edit'
]);

Route::resource('type_groups', 'App\Http\Controllers\TypeGroupController')->except([
    'create', 'edit'
]);

Route::resource('types', 'App\Http\Controllers\TypeController');
Route::resource('variants', 'App\Http\Controllers\VariantController');
Route::resource('seed_producers', 'App\Http\Controllers\SeedProducerController');

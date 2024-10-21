<?php

use Modules\Commercial\Http\Controllers\CommercialController;
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

Route::group(['as'=> 'admin.', 'prefix' => 'admin', 'middleware' => ['XSS','DEMO','auth:admin']],function (){

    Route::resource('commercial', CommercialController::class);
    Route::post('commercial_new_arrivals', [CommercialController::class, 'newArrivalCars'])->name('commercial_new_arrivals');
});
Route::get('fetch-commercials', [CommercialController::class, 'fetchCommercials'])->name('fetch_commercials');
Route::post('delete-commercial', [CommercialController::class,'deleteCommercials'])->name('delete-commercial');

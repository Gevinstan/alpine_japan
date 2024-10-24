<?php
use Modules\SmallHeavy\Http\Controllers\SmallHeavyController;
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

    Route::resource('small-heavy', SmallHeavyController::class);
    
});
Route::post('delete-small-heavy', [SmallHeavyController::class,'deleteSmallHeavy'])->name('delete-small-heavy');

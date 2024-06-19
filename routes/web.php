<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\ProdiController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix'=>'/'], function(){
    Route::get('/',[LoginController::class,'index'])->name('login.index');
    Route::post('/request',[LoginController::class,'proccess'])->name('login.proccess');
});

Route::group(['prefix'=>'/home'], function(){
    Route::get('/',[HomeController::class,'adminIndex'])->name("admin.index");
    Route::post('/',[HomeController::class,'addUser'])->name("admin.user");

});

Route::group(['prefix'=>'/master'], function(){
    Route::resource('/', MasterDataController::class)->names([
        'index' => 'master.index',
        'create' => 'master.create',
        'store' => 'master.store',
        'show' => 'master.show',
        'edit' => 'master.edit',
        'update' => 'master.update',
        'destroy' => 'master.destroy',
    ]);
    Route::resource('/prodi',ProdiController::class);
});


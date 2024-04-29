<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\SendMailController;

Route::group(['prefix' => '7439','middleware' => ['admin','PreventBackPage']], function(){

    //GET METHODS
    Route::get('login',[AuthController::class,'loginView']);
    //POST METHODS
    Route::post('login',[AuthController::class,'login'])->name('login');

    route::get('logout',[AuthController::class,'logout'])->name('logout');

    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    Route::group(['prefix' => 'organizations'],function(){
        // GET METHODS
        Route::get('',[OrganizationCaontroller::class,'index'])->name('organizations.index');

        // POST METHODS
        
    });
});


Route::get('coming-soon',[DashboardController::class,'comingSoon']);
Route::post('contact-mail',[SendMailController::class,'SendContactMail'])->name('contact-mail');
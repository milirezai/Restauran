<?php

use System\Router\Web\Route;


    /*
    |--------------------------------------------------------------------------
    | Route post
    |--------------------------------------------------------------------------
    |
    |  
    |  
    |
    |--------------------------------------------------------------------------
    | Route get
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */
    
    Route::get('','HomeController@index','index');
    Route::get('create','HomeController@create','create');
    Route::post('store','HomeController@store','store');
    Route::get('edit/{id}','HomeController@edit','edit');
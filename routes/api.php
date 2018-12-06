<?php

use Illuminate\Http\Request;





/*
  Public API Routes
*/

Route::group(['prefix' => 'v1'], function() {

    Route::resource('clients', 'ClientController')->except('create','edit');
    
});


<?php

use Illuminate\Http\Request;





/*
  Public API Routes
*/

Route::group(['prefix' => 'v1'], function() {

    Route::resource('client', 'ClientController')->except('create','edit','update');
    
    Route::put('/client/{id}',[
        'uses'=>'ClientController@update',
        'as'=>'client.update'
    ]);
    
});


<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home',
    ]);

    Route::resource('clients', 'ClientsController');
    Route::resource('clients.policies', 'ClientPoliciesController');
    Route::resource('clients.payments', 'ClientPaymentsController');
    Route::resource('insurers', 'InsurersController', ['only' => 'index']);
    Route::resource('policies', 'PoliciesController');
});

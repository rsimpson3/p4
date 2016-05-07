<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

# ----------------------------------------
# Authentication
# ----------------------------------------

# ----------------------------------------
# Welcome & Game Play Information
# ----------------------------------------

Route::get('/', 'WelcomeController@getIndex'); # Home

Route::get('/rules', 'WelcomeController@getRules');
Route::get('/rubric', 'WelcomeController@getRubric');
Route::get('/points', 'WelcomeController@getPoints');


# ----------------------------------------
# Game specific Routes
# ----------------------------------------


# ----------------------------------------
# Debugging specific routes
# ----------------------------------------

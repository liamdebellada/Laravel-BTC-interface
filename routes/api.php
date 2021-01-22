<?php

use Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/contact', function()
{
    //all user variables are accessible here
    $name = Request::get('name');
    $email = Request::get('email');
    $question = Request::get('question');
    return $email;
});
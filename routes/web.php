<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    $btcValue = file_get_contents("https://blockchain.info/tobtc?currency=USD&value=1");;
    return view('interface', ["btcValue"=>$btcValue]);
});

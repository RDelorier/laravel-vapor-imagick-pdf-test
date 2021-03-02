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
    $img = new Imagick(__DIR__.'/example.pdf');
    $img->writeImages(__DIR__.'/example-web.png', true);
    $pages = $img->getNumberImages();
    return response("{$pages} pages converted to images");
});

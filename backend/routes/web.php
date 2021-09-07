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

Route::get('/info', function () {
    return view('info');
});

// Route::get('/hello/{msg}', function ($msg) {
// $html = <<<EOF
// <!DOCTYPE html>
// <html lang="ja">
// <head>
// <meta charset="utf-8">
// <title>Hello</title>
// </head>
// <body>
    
// <h1>Hello.blade.php</h1>
// <p>{$msg}</p>
    
// </body>
// </html>
// EOF;
//     return $html;
// });

Route::get('/hello', 'App\Http\Controllers\HelloController@index');
Route::get('/hello/add', 'App\Http\Controllers\HelloController@add');
Route::post('/hello/result', 'App\Http\Controllers\HelloController@result');
Route::get('/hello/newline', 'App\Http\Controllers\HelloController@newline');
Route::get('/hello/if', 'App\Http\Controllers\HelloController@if');
Route::get('/hello/switch', 'App\Http\Controllers\HelloController@switch');

Route::get('/star', 'App\Http\Controllers\StarController@index');
Route::get('/star/sun', 'App\Http\Controllers\StarController@sun');
Route::get('/star/moon', 'App\Http\Controllers\StarController@moon');

Route::get('board', 'App\Http\Controllers\BoardController@index');
Route::post('board', 'App\Http\Controllers\BoardController@add');

Route::get('/', function () {
    logger('welcome route.');
    return view('welcome');
});
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

Route::get('/hello/{msg}', function ($msg) {
$html = <<<EOF
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Hello</title>
</head>
<body>
    
<h1>Hello.blade.php</h1>
<p>{$msg}</p>
    
</body>
</html>
EOF;
    return $html;
});

Route::get('/hello', 'App\Http\Controllers\HelloController@index');
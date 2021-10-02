<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return view('test');
// })->name('test');

// Route::get('/get_data', function (Request $request) {
//     dd($request);
// })->name('get_data');

Route::resource('tests', TestController::class);

Route::get('/aaa', function () {
    return view('test');
})->name('alink');

Route::get('/init', function () {
    return view('init');
});
Route::get('/', function () {
    $url=route('get_data');
    return $url;
});
// Route::get('/', function () {
//     return view('test');
// });

// Route::get('/abc',function(){
//     return "hello abc";
// })->name('abc123');

// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });

// Route::get('/php/{id}/location/{location}', function ($number,$addr) {
//     return '<h1>hello php student: '.$number.":))<br>addr:".$addr."</h1>";
// });
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
    return phpinfo();
    return view('welcome');
});

Route::get('/queries/{event}', function ($event) {
//    $events = \App\Models\Event::all();
//    $events = \App\Models\Event::all(['title', 'description']);
//    $event = \App\Models\Event::where('id', 1)->first();
    $event = \App\Models\Event::find($event);

    return $event;
});

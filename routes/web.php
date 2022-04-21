<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('home', [
        'name' => 'Mesaque',
        'frameworks' => ['Vue', 'Inertia', 'Laravel']
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'time' => now()->toTimeString(),
        'name' => 'Mesaque'
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings', [
        'name' => 'Mesaque'
    ]);
});

Route::post('/logout', function () {
    dd(request('foo'));
});

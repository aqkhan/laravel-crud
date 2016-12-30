<?php

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

use App\User;
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

// Crud App

Route::resource('/posts', 'PostsController');
Route::resource('/form-posts', 'FormPostsController');

// Exhibit Carbon package's date features

Route::get('/dates', function() {
    $date = new DateTime('+1 week');
    echo 'Native PHP way: ' . $date->format('M-D-Y') . '<br>';

    // Using Carbon
    $newDate = Carbon::now();
    echo 'Using Carbon: ' . $newDate;
});

// Exhibit Accessors functionality. Define the accessor in the model first. See getNameAttribute() method in User model for reference.
Route::get('/accessor', function() {
    $user = User::findOrFail(1);
    echo $user->name;
});
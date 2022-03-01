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


    $user = \App\Models\User::find(4);
    $post = \App\Models\Post::find(3);

//    $post->statuses()->create([
//        'status' => 'انتشار شده',
//        'comment' => 'published',
//        'date' => \Carbon\Carbon::now()->toDateTimeString(),
//    ]);


//    dd($user->images()->create($imgs));

//    dd($user->images);
//    dd($post->user->images);

    return view('index', compact('post'));

});


Route::post('form',[\App\Http\Controllers\PostController::class,'index'] )->name('form');


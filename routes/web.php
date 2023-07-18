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
    

    $data = [
        'intro' => 'HELLO WORLD',
    ];
    return view('home', $data);
})->name('home');

Route::get('/about-us', function () {
    

    $data = [
        'lorem' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam quod, velit neque aliquam necessitatibus optio eum enim asperiores tempore quasi ex libero fugiat error aspernatur? Mollitia hic quae qui repellendus?
        Natus suscipit dignissimos beatae minima quibusdam, delectus sint, saepe sapiente dolore praesentium eius fugiat ad magnam? Officiis minima maiores porro eum fugit laudantium? Qui rem incidunt veritatis et laboriosam quidem!
        Facilis alias sapiente eos ad. Illo, deleniti perspiciatis. Doloremque rerum, qui, accusantium accusamus hic facere eum inventore velit explicabo officiis maxime, voluptates ut numquam. Dolores beatae eum sequi natus sed?
        Vel accusantium asperiores labore aliquam? Perferendis tenetur omnis enim quod sapiente a consectetur in, voluptas dolorem voluptatem officia ad non voluptatibus natus quis rem, quos ab doloribus corrupti exercitationem blanditiis?',
    ];
    return view('about-us', $data);
})->name('about-us');

Route::get('/discover', function () {
    

    $data = [
        'title' => 'WELCOME',
    ];
    return view('discover', $data);
})->name('discover');

Route::get('/support', function () {
    

    $data = [
        
    ];
    return view('support', $data);
})->name('support');

Route::get('/guida-principianti', function () {
    

    $data = [
        
    ];
    return view('guida-principianti', $data);
})->name('guida-principianti');
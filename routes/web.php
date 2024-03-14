<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\WelcomeController as WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $menuLinks = [
        [ 'name' => 'characters' ],
        [ 'name' => 'comics' ],
        [ 'name' => 'movies' ],
        [ 'name' => 'tv' ],
        [ 'name' => 'games' ],
        [ 'name' => 'collectibles' ],
        [ 'name' => 'videos' ],
        [ 'name' => 'fans' ],
        [ 'name' => 'news' ],
        [ 'name' => 'shop' ],
    ];

        $comics = config('comics');
    return view('pages.welcome', compact('menuLinks', 'comics'));
})->name('homePage');



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

    $shops = [
        [ 'name' => 'digital comics',
        'image' => 'src/img/buy-comics-digital-comics.png' 
        ],
        [ 'name' => 'dc merchandise',
        'image' => 'src/img/buy-comics-merchandise.png' 
        ],
        [ 'name' => 'subscription',
        'image' => 'src/img/buy-comics-subscriptions.png' 
        ],
        [ 'name' => 'comic shop locator',
        'image' => 'src/img/buy-comics-shop-locator.png' 
        ],
        [ 'name' => 'dc power visa',
        'image' => 'src/img/buy-dc-power-visa.svg' 
        ]
    ];

        $comics = config('comics');
    return view('pages.welcome', compact('menuLinks', 'comics', 'shops'));
})->name('homePage');



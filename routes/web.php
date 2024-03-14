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
        'image' => 'resources/img/buy-comics-digital-comics.png' 
        ],
        [ 'name' => 'dc merchandise',
        'image' => 'resources/img/buy-comics-merchandise.png' 
        ],
        [ 'name' => 'subscription',
        'image' => 'resources/img/buy-comics-subscriptions.png' 
        ],
        [ 'name' => 'comic shop locator',
        'image' => 'resources/img/buy-comics-shop-locator.png' 
        ],
        [ 'name' => 'dc power visa',
        'image' => 'resources/img/buy-dc-power-visa.svg' 
        ]
    ];

    $coomics = [
        [ 'name' => 'Characters' ],
        [ 'name' => 'Comics' ],
        [ 'name' => 'Movies' ],
        [ 'name' => 'TV' ],
        [ 'name' => 'Games' ],
        [ 'name' => 'Videos' ],
        [ 'name' => 'News' ]
    ];

    $shoops = [
        [ 'name' => 'Shop DC' ],
        [ 'name' => 'Shop DC Collectibles' ]
    ];

    $dc = [
        [ 'name' => 'Terms Of Use' ],
        [ 'name' => 'Privacy policy (New)' ],
        [ 'name' => 'Ad Choices' ],
        [ 'name' => 'Advertising' ],
        [ 'name' => 'Jobs' ],
        [ 'name' => 'Subscriptions' ],
        [ 'name' => 'Talent Workshops' ],
        [ 'name' => 'CPSC Certificates' ],
        [ 'name' => 'Ratings' ],
        [ 'name' => 'Shop Help' ],
        [ 'name' => 'Contact Us' ]
    ];

    $sites = [
        [ 'name' => 'DC' ],
        [ 'name' => 'MAD Magazine' ],
        [ 'name' => 'DC Kids' ],
        [ 'name' => 'DC Universe' ],
        [ 'name' => 'DC Power Visa' ]
    ];

    $socials = [
        ['image' => 'resources/img/footer-facebook.png' 
        ],
        ['image' => 'resources/img/footer-twitter.png' 
        ],
        ['image' => 'resources/img/footer-youtube.png' 
        ],
        ['image' => 'resources/img/footer-pinterest.png' 
        ],
        ['image' => 'resources/img/footer-periscope.png' 
        ],
    ];

        $comics = config('comics');
    return view('pages.welcome', compact('menuLinks', 'comics', 'shops', 'coomics', 'shoops', 'dc', 'sites', 'socials'));
})->name('homePage');



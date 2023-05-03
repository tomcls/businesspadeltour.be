<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapXmlController;
use App\Http\Livewire\Price;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
//use Laravel\Octane\Facades\Octane;

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

//Route::post('livewire/message/{name}', '\Livewire\Controllers\HttpConnectionHandler');


//Octane::route('GET','/{lang?}/index',function () {return new Response((new HomeController)->index());});
Route::get('/register', function () {
    return view('components.pages.register');
});


// Route::prefix('{lang}')->middleware('set.locale')->group(function () {
//     Octane::route('GET','/index',function () {return new Response((new HomeController)->index());});
// });

Route::get('/', function () {
    return new Response((new HomeController)->index());
});
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('set.locale')->group(function ($r) {

    if (in_array(app('request')->segment(1), array_keys(config('app.locales')))) {
        app()->setLocale(app('request')->segment(1));
    }
    Route::get('/index', function () {
        return new Response((new HomeController)->index());
    });
    Route::get('/', function () {
        return new Response((new HomeController)->index());
    });
    Route::get('/' . trans('route.articles'), function () {
        return new Response((new ArticleController)->index());
    });

    Route::get('/'. trans('route.price'), function () {
        return view('components.pages.price');
    });
    
    Route::get('/'. trans('route.sessions'), function () {
        return view('components.pages.sessions');
    });
    
    Route::get('/'. trans('route.ranking'), function () {
        return view('components.pages.ranking');
    });

    Route::get('/' . trans('route.article').'/{slug}', function ($locale,$slug) {
        return new Response((new ArticleController)->show($locale,$slug));
    });
    Route::get('/'. trans('route.register'), function () {
        return view('components.pages.register');
    });
   // Route::get('/' . trans('route.article', []).'/{slug}', 'ArticleController@show')->name('article');
    // Octane::route('GET','/en/index',function () {return new Response((new HomeController)->index());});
});

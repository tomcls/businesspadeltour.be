<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CSVController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapXmlController;
use App\Http\Controllers\StripeController;
use App\Http\Livewire\Admin\Companies;
use App\Http\Livewire\Admin\Logos;
use App\Http\Livewire\Admin\Sessions;
use App\Http\Livewire\Admin\Teams;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\RequestPwd;
use App\Http\Livewire\Auth\UpdatePwd;
use App\Http\Livewire\Charge;
use App\Http\Livewire\ChargeSuccess;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Me\Invoice;
use App\Http\Livewire\Me\Logo;
use App\Http\Livewire\Me\Profile;
use App\Http\Livewire\Photos;
use App\Http\Livewire\Photos2024;
use App\Http\Livewire\Video;
use Illuminate\Http\Response;
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

Route::get('/players/download', [CSVController::class,'download'])->name('players');
Route::get('/contacts/download', [CSVController::class,'contacts'])->name('contactsCSV');
Route::get('/users/download', [CSVController::class,'users'])->name('usersCSV');
Route::get('/companies/download', [CSVController::class,'companies'])->name('companiesCSV');

Route::post('/stripe/create', [StripeController::class, 'create'])->name('stripe.create');

Route::middleware('auth')->group(function () {
    Route::get('/me/profile', Profile::class)->name('me.profile');
    Route::get('/me/invoices', Invoice::class)->name('me.invoices');
    Route::get('/me/logo', Logo::class)->name('me.logo');
});
Route::get('users/logout', function () {
    //  phpinfo(); 
      auth()->logout();
      return redirect('/');
  })->name('logout');
Route::prefix('{locale?}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('set.locale')->group(function ($r) {

    Route::get('/login', Login::class)->name('login');
    Route::get('/update-password/{userId}/{token}', UpdatePwd::class)->name('auth.updatePassword');
    Route::get('/request-password', RequestPwd::class)->name('auth.requestPassword');

    if (in_array(app('request')->segment(1), array_keys(config('app.locales')))) {
        app()->setLocale(app('request')->segment(1));
    }
    Route::get('/index', function () {
        return new Response((new HomeController)->index());
    });
    Route::get('/', function () {
        return new Response((new HomeController)->index());
    })->name('home');
    
    Route::get('/tarif', function () {
        return view('components.pages.price');
    });
    Route::get('/price', function () {
        return view('components.pages.price');
    });

    Route::get('/'. trans('route.sessions'), function () {
        return view('components.pages.sessions');
    });

    // Route::get('/photos/{slug?}', function ($slug) {
    //     return view('components.pages.photos');
    // });

    Route::get('/contact', Contact::class)->name('contact');
    Route::get('/video', Video::class)->name('video');
    
    Route::get('/photos/{slug?}', Photos::class)->name('photos');
    Route::get('/photos2024/{slug?}', Photos2024::class)->name('photos2024');

    Route::get('/news', function () {
        return new Response((new ArticleController)->index());
    });
    Route::get('/articles', function () {
        return new Response((new ArticleController)->index());
    });

    Route::get('/'. trans('route.ranking'), function () {
        return view('components.pages.ranking');
    });

    Route::get('/' . trans('route.article').'/{slug}', function ($locale,$slug) {
        return new Response((new ArticleController)->show($locale,$slug));
    });
    Route::get('/inscription', function () {
        return view('components.pages.register');
    });

    Route::get('/register', function () {
        return view('components.pages.register');
    });
    Route::get('/charge', Charge::class)->name('charge');

    Route::get('/charge-success', ChargeSuccess::class)->name('charge.success');
   // Route::get('/' . trans('route.article', []).'/{slug}', 'ArticleController@show')->name('article');
    // Octane::route('GET','/en/index',function () {return new Response((new HomeController)->index());});
});
Route::group(['middleware' => ['auth', 'can:admin']], function () {
    Route::get('/admin/users', Users::class)->name('admin.users');
    Route::get('/admin/teams', Teams::class)->name('admin.teams');
    Route::get('/admin/companies', Companies::class)->name('admin.companies');
    Route::get('/admin/sessions', Sessions::class)->name('admin.sessions');
    Route::get('/admin/logos', Logos::class)->name('admin.logos');
});

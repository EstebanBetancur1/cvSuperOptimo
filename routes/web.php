<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\auths;
use App\Http\Controllers\dashboard;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\terminos;

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
    return view('pages.index', ['PageName' => 'Inicio']);
});

Route::get('/curriculum', [TemplatesController::class, 'curriculum'])->name('curriculum');

Route::get('/auth', [auths::class, 'index'])->name('register');

Route::get('/auth/login', [auths::class, 'login'])->name('Inicia');

Route::post('/register_auth', [auths::class, 'register'])->name('register_auth');


Route::get('/google-auth/redirect', function () {
    return Socialite::driver('Google')->redirect();
});
 
Route::get('/google-auth/callback', function () {
    $user = Socialite::driver('Google')->user();

    $user = User::UpdateOrCreate(
        [
            'redsocial_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
        ]
    );
    Auth::login($user, true);

    return redirect()->to('/dashboard');


  
});

Route::get('/facebook-auth/redirect', function () {
    return Socialite::driver('Facebook')->redirect();
});

Route::get('/facebook-auth/callback', function () {
    $user = Socialite::driver('Facebook')->user();

    $user = User::UpdateOrCreate(
        [
            'redsocial_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
        ]
    );
    Auth::login($user, true);

    return redirect()->to('/dashboard');
});

Route::get('/dashboard', [dashboard::class, 'index'])->name('Dashboard');

Route::get('/politicas', [terminos::class, 'Politicas'])->name('Politicas y condiciones');



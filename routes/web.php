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

Route::post('/login_auth', [auths::class, 'login_auth'])->name('login_auth');

Route::post('/recover', [auths::class, 'recover'])->name('recover');

Route::get('/Recover/{token}', [auths::class, 'recover_token'])->name('recover_token');

Route::get('/recover/broken', [auths::class, 'recover_broken'])->name('recover_broken');  

Route::post('/change_password', [auths::class, 'change_password'])->name('change_password');

Route::get('/logout', [auths::class, 'logout'])->name('logout');

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

Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');

Route::get('/politicas', [terminos::class, 'Politicas'])->name('Politicas y condiciones');



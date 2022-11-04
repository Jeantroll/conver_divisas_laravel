<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

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
    return view('welcome');
});
//auth guest
Route::view('login','auth.login')->middleware('guest')->name('login');
Route::view('register','auth.register')->middleware('guest');

Route::post('login', function () {
    $inputsCredentials = request()->only('email', 'password');

    if (Auth::attempt($inputsCredentials))
    {
        request()->session()->regenerate();
        return redirect('home');
    }

    return redirect('login');

});

Route::post('register', function () {

    $name = request('name');
    $email = request('email');
    $password = request('password');


    if(
        User::create([
        "email" => $email,
        "password" => Hash::make($password),
        'email_verified_at' => now(),
        "name" => $name,
        'remember_token' => Str::random(10),

        ])){

        return redirect('login');
    }else{
        dd('el usuario ya ha sido registrado');
    }


});


Route::post('logout', function () {
    Auth::logout();

    return redirect('login');

});

//With auth

Route::view('home','pages-with-login.home')->middleware('auth');

$show = false;


Route::view('convert','pages-with-login.convert',compact('show'))->middleware('auth');

Route::post('converto', 'App\Http\Controllers\convertController@convertTo');

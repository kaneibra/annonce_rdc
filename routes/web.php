<?php

use App\Annonce;
use App\Category;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    $annonces = Annonce::orderby('created_at','desc')->take(4)->get();
    $myAds = Annonce::orderby('created_at','desc')->take(7)->get();
    $cats = Category::all();
    return view('welcome',compact('annonces','myAds'));
})->name('acceuil');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::middleware(['auth','admin'])->prefix('dashboard')->group(function(){

    Route::resource('category','CategoryController');
    Route::resource('commune','CommuneController');
});
Route::resource('annonce','AnnonceController');

Route::resource('profil','UserController');


Route::get('/home', 'HomeController@index')->name('home');
// Route::get('ads/create','AnnonceController@create')->name('ads.create');
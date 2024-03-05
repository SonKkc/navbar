<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NavbarAnonymousController;
use App\Livewire\Navbar\Navbar;
use App\Livewire\Pages\Home;
use App\Livewire\Authen\Login;
use App\Livewire\Authen\Register;

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

Route::get('/', [NavbarAnonymousController::class, 'showNavbar'])->name('home');
Route::view('/welcome', 'welcome')->name('welcome');
Route::view('/navbar', 'navbarBase')->name('navbar');
Route::get('/getMenuData', [NavbarController::class, 'getMenuData']);
Route::get('/livewire', Navbar::class)->name('navbar.index');
Route::middleware(['auth'])->group(function () {
    
});
Route::get('/home', Home::class)->name('home');
// login-register
Route::get('/login', Login::class)->name('authen.login');
Route::get('/register', Register::class)->name('authen.register');

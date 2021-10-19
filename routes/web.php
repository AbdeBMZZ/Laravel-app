<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentralController; # don't forgot to add this

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

Route::get('/', [CentralController::class, 'index'])->name('home');
Route::get('/post/{id}', [[CentralController::class, 'show']])->name('post.show');
Route::get('/create/post', [CentralController::class, 'create'])->name('post.create');
Route::get('/myPosts', [CentralController::class, 'myPosts'])->name('myPosts');
Route::post('/add/post', [CentralController::class, 'store'])->name('post.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [CentralController::class, 'index'])->name('dashboard');

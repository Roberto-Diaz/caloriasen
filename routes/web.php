<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');       

Route::middleware(['auth:sanctum', 'verified', 'roles:admin'])->get('/dashboard', function () {
    return view('dashboard');   
})->name('dashboard');

Route::name('admin.')->middleware(['auth', 'roles:admin'])->group(function () {                 
    Route::get('/blog/crear', [PostController::class, 'create'])->name('blog.create');                                            
});     

Route::get('/blog', [PostController::class, 'getPosts'])->name('blog');                                                  
// Route::group(function () {               
// });          
    
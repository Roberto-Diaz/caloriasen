<?php

use App\Http\Controllers\BlogController;
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

Route::middleware(['roles:admin'])->get('/dashboard', function () {
    return view('dashboard');       
})->name('dashboard');

Route::prefix('admin')->name('admin.')->middleware(['roles:admin'])->group(function () {                       
    Route::get('/publicaciones', [PostController::class, 'index'])->name('post.index');                                            
    Route::get('/publicaciones/agregar', [PostController::class, 'create'])->name('post.create');                                                        
    // Route::get('/crear/publicacion', [PostController::class, 'create'])->name('create.post');                                               
    Route::post('/registar/publicacion', [PostController::class, 'store'])->name('post.store');                                                        
    Route::get('/editar/publicacion/{post}', [PostController::class, 'edit'])->name('post.edit')->whereUuid('id');                                                                                   
    Route::put('/actualizar/publicacion', [PostController::class, 'update'])->name('post.update');                                                  
    // Route::post('/autorizar/publicacion', [PostController::class, 'authorize'])->name('authorize.post');                                            
});          
            
Route::get('/blog', [BlogController::class, 'index'])->name('blog');                                                                                    
// Route::get('/blog/{blog:slug}', [PostController::class, 'show'])->name('show.post');                                                         

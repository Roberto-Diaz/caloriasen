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
    Route::get('/publicaciones', [PostController::class, 'index'])->name('index.post');                                            
    Route::get('/publicaciones/agregar', [PostController::class, 'create'])->name('create.post');                                                        
    // Route::get('/crear/publicacion', [PostController::class, 'create'])->name('create.post');                                            
    // Route::post('/registar/publicacion', [PostController::class, 'store'])->name('store.post');                                            
    // Route::get('/editar/publicacion', [PostController::class, 'edit'])->name('edit.post');                                            
    // Route::post('/actualizar/publicacion', [PostController::class, 'update'])->name('update.post');                                            
    // Route::post('/autorizar/publicacion', [PostController::class, 'authorize'])->name('authorize.post');                                            
});                     

            
Route::get('/blog', [BlogController::class, 'index'])->name('blog');                                                                                    
// Route::get('/blog/{blog:slug}', [PostController::class, 'show'])->name('show.post');                                                         

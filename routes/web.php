<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::post('/addservice', [PageController::class, 'addservice'])->name('addservice');
Route::get('/barbers', [PageController::class, 'barbers'])->name('barbers');
Route::post('/addbarber', [PageController::class, 'addbarber'])->name('addbarber');
Route::get('/appointment', [PageController::class, 'appointment'])->name('appointment');
Route::post('/app', [PageController::class, 'app'])->name('app');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('contacting', [PageController::class, 'contacting'])->name('contacting');
Route::post('commenting', [PageController::class, 'commenting'])->name('commenting');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/price', [PageController::class, 'price'])->name('price');
Route::get('/moreinfo', [PageController::class, 'moreinfo'])->name('moreinfo');
Route::get('/admin', [PageController::class, 'admin'])->name('admin');
Route::post('/addwork', [PageController::class, 'addwork'])->name('addwork');
Route::view('our_barbers', 'components.layout.our_barbers')->name('our_barbers');

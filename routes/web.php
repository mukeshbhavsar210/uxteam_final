<?php

use App\Livewire\BlogDetail;
use App\Livewire\Blogs;
use App\Livewire\Events;
use App\Livewire\Home;
use App\Livewire\Service;
use App\Livewire\Work;
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

Route::get('/', Home::class)->name('home');
Route::get('/works', Work::class)->name('works');
Route::get('/services', Service::class)->name('services');
Route::get('/blog', Blogs::class)->name('blog');
Route::get('/blog/{id}', BlogDetail::class)->name('blogDetail');
Route::get('/events', Events::class)->name('events');

require __DIR__.'/auth.php';

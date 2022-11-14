<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityController;

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

// Route::get('/', function () {
//     return view('maincomponent.index');
// });
Route::get('/', [HomeController::class, 'home']);

Route::view('donates', 'maincomponent.donate')->name('donates');
Route::view('contact', 'maincomponent.contact')->name('contact');
Route::view('about', 'maincomponent.about')->name('about');

 //Blog routes
Route::resource('news', BlogController::class);

Route::get('/dashboard', function () {
    return view('admin/master/index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

 //event routes
Route::resource('event', EventsController::class);

// Comments 
Route::get('comments', [CommentController::class, 'index'])->name('comment.index');
Route::patch('comment/validate/{id}', [CommentController::class, 'validatecomment'])->name('comment.validate');
Route::post('comment/{id}', [CommentController::class, 'create'])->name('comment.store');
Route::delete('comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
// Reply
Route::post('comment/reply/{reply}',[CommentController::class, 'reply'])->name('comment.reply');
Route::delete('comment/delete/{reply}',[CommentController::class, 'destroy'])->name('comment.delete');
Route::delete('reply/delete/{reply}',[CommentController::class, 'deleteReply'])->name('reply.delete');

// Contact Us routes
Route::resource('mail', ContactController::class);
Route::get('mail/reply_mail/{mail}', [ContactController::class, 'reply'])->name('reply_mail');
Route::post('mail/send_mail', [ContactController::class, 'mail'])->name('send_mail');

//donate routes
Route::resource('donate', DonationController::class);

//gallery routes
Route::resource('gallery', GalleryController::class);
// activity
Route::resource('activity', ActivityController::class);

// activity
// Route::get('/', HomeController::class);
Route::get('/', [HomeController::class, 'index']);




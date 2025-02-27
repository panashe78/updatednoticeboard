<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VibesandeventsController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\welcome;
// Route for the search functionality

Route::get('/', [welcome::class, 'index']);
// Define a route that returns a view
Route::get('/toppicks', function () {
    return view('dealsandoffers');
});
Route::get('/vibesandevents', [VibesandeventsController::class, 'index']);

// routes/web.php
// Define a simple route
// routes/web.php




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use App\Http\Controllers\RestaurantController;
Route::get('/restaurants/search', [RestaurantController::class, 'search'])->name('restaurants.search');
Route::post('/approve-restaurant/{id}', [RestaurantController::class, 'approve'])->name('approve.restaurant');


Route::resource('restaurants', RestaurantController::class);

use App\Http\Controllers\MenuController;

Route::middleware(['auth'])->group(function () {
    Route::resource('menus', MenuController::class);
});

use App\Http\Controllers\BookingController;

Route::middleware(['auth'])->group(function () {
    Route::resource('bookings', BookingController::class);
});

use App\Http\Controllers\TestimonialsController;

Route::middleware(['auth'])->group(function () {
    Route::resource('testimonials', TestimonialsController::class);
});

use App\Http\Controllers\ChefsController;

Route::middleware(['auth'])->group(function () {
    Route::resource('chefs', ChefsController::class);
});

use App\Http\Controllers\EventsController;

Route::middleware(['auth'])->group(function () {
    Route::resource('events', EventsController::class);
});

use App\Http\Controllers\FAQsController;



use App\Http\Controllers\ReservationsController;

Route::middleware(['auth'])->group(function () {
    Route::resource('reservations', ReservationsController::class);
});

Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');




Route::resource('menus', MenuController::class);

use App\Http\Controllers\FaqController;

Route::resource('faqs', FaqController::class);

Route::get('/admin/dashboard', [AdminController::class, 'userStatistics'])->name('admin.dashboard');

use App\Http\Controllers\SubscriptionController;

Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

use App\Http\Controllers\MessageController;

Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message');

Route::get('/admin/messages', [AdminController::class, 'viewMessages'])->name('admin.messages')->middleware('auth');

Route::resource('messages', MessageController::class)->middleware('auth');

use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function (){
    Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
});


// Other routes...

Route::resource('bars', RestaurantController::class);

use App\Http\Controllers\GalleryController;

Route::resource('restaurants.gallery', GalleryController::class);




Route::post('/approve-restaurant/{id}', [RestaurantController::class, 'approve'])->name('approve.restaurant');
Route::post('/reject-restaurant/{id}', [RestaurantController::class, 'reject'])->name('reject.restaurant');

use App\Http\Controllers\EventController;

Route::post('/approve-event/{id}', [EventController::class, 'approve'])->name('approve.event');
Route::post('/reject-event/{id}', [EventController::class, 'reject'])->name('reject.event');
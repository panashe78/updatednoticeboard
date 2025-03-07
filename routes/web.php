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

Route::get('/business', function () {
    return view('restaurants.create2');
});
Route::get('/accommodation', function () {
    return view('restaurants.create3');
});
Route::get('/event', function () {
    return view('restaurants.create4');
});


Route::get('/eve', function () {
    return view('restaurants.event');
});

Route::get('/busi', function () {
    return view('restaurants.business');
});


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

use App\Http\Controllers\DonationController;

Route::get('/donate', [DonationController::class, 'showDonationForm'])->name('donation.form');
Route::post('/donate', [DonationController::class, 'processDonation'])->name('donation.process');
Route::get('/donation/success', [DonationController::class, 'donationSuccess'])->name('donation.success');
Route::get('/donation/cancel', [DonationController::class, 'donationCancel'])->name('donation.cancel');

use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'search'])->name('search');



// Other routes...

Route::get('/restaurants/{restaurant}/event', [RestaurantController::class, 'event'])->name('restaurants.event');
Route::get('/restaurants/{restaurant}/business', [RestaurantController::class, 'business'])->name('restaurants.business');
Route::get('/restaurants/{restaurant}/accommodation', [RestaurantController::class, 'accommodation'])->name('restaurants.accommodation');
Route::get('/restaurants/{restaurant}/restaurant', [RestaurantController::class, 'restaurant'])->name('restaurants.restaurant');
Route::get('/acco', [RestaurantController::class, 'indexacco'])->name('restaurants.show-accommodation');
Route::get('/eve', [RestaurantController::class, 'indexeve'])->name('restaurants.show-event');
Route::get('/bus', [RestaurantController::class, 'indexbus'])->name('restaurants.show-business');
Route::get('/rest', [RestaurantController::class, 'indexrest'])->name('restaurants.show-restaurant');




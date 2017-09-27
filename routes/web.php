<?php

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

Auth::routes();

Route::get('/home', 'PagesController@getIndex')->name('pages.home');
Route::get('/', 'PagesController@getIndex')->name('pages.home');
Route::get('/restaurant', 'PagesController@getRestaurant')->name('pages.restaurant');
Route::get('/school', 'PagesController@getSchool')->name('pages.school');
Route::get('/shop', 'PagesController@getShop')->name('pages.shop');
Route::get('/vouchers', 'PagesController@getVouchers')->name('pages.vouchers');
Route::get('/foodtours', 'PagesController@getFoodtours')->name('pages.foodtours');
Route::get('/mapsandinfo', 'PagesController@getMapsandinfo')->name('pages.mapsandinfo');
Route::get('/recipe', 'PagesController@getRecipe')->name('pages.recipe');
Route::get('/newsletter', 'PagesController@getNewsletter')->name('pages.newsletter');
Route::get('/privacy', 'PagesController@getPrivacy')->name('pages.privacy');
Route::get('/download', 'DownloadController@getDownload')->name('download');
Route::get('/book/{scheduleid}', 'SchoolController@getBook')->name('pages.book');
Route::get('/waitlist/{scheduleid}', 'SchoolController@getWaitlist')->name('school.waitlist');


/* Admin Controller */
Route::get('/admin', 'Admin\AdminController@getIndex')->name('admin.index');

// Classes Controller
Route::get('/admin/classes/editclass', 'Admin\ClassesController@getShowEditlist')->name('classes.showeditlist');
Route::get('/admin/classes/search', 'Admin\ClassesController@getSearchView')->name('classes.searchview');
Route::post('/admin/classes/search', 'Admin\ClassesController@postSearch')->name('classes.search');
Route::resource('/admin/classes', 'Admin\ClassesController');

// Schedule Controller
Route::resource('/admin/schedule', 'Admin\ScheduleController');

// Booking Controller
Route::get('/admin/booking/report', 'Admin\BookingController@getReport')->name('booking.save');
Route::get('/admin/viewbooking/{id}','Admin\BookingController@getViewbooking')
Route::resource('/admin/booking', 'Admin\BookingController');

// Other Parts
Route::get('/admin/viewcerts', 'Admin\AdminController@getViewcerts')->name('admin.cert');
Route::get('/admin/credits', 'Admin\AdminController@getCredits')->name('admin.credits');
Route::get('/admin/viewnewsletter', 'Admin\AdminController@getViewnewsletter')->name('admin.viewnewsletter');

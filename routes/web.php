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
use App\Http\Controllers\Frontend\RazorpayController;

Route::get('razorpay', [RazorpayController::class, 'razorpay'])->name('razorpay');
Route::post('razorpaypayment', [RazorpayController::class, 'payment'])->name('payment');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
//    Artisan::call('route:cache');
//    Artisan::call('optimize');
    Artisan::call('cache:clear');
    return '<h1>Cache cleared</h1>';
});

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/aboutus', 'Frontend\PagesController@aboutus')->name('page.aboutus');
Route::get('/commite_emembers', 'Frontend\PagesController@commite_emembers')->name('page.commite_emembers');
Route::get('/cme_photos', 'Frontend\PagesController@cme_photos')->name('page.cme_photos');

Route::get('/team', 'Frontend\PagesController@team')->name('page.team');
Route::get('/blog', 'Frontend\PagesController@blog')->name('page.blog');
Route::get('/blog/{slug}', 'Frontend\PagesController@blogDetail')->name('page.blogDetail');

Route::get('/events', 'Frontend\PagesController@events')->name('page.events');
Route::get('/event/{slug}', 'Frontend\PagesController@eventDetail')->name('page.eventDetail');


Route::get('/agenda_for_meeting', 'Frontend\PagesController@agenda_for_meeting')->name('page.agenda_for_meeting');
Route::get('/press_release', 'Frontend\PagesController@press_release')->name('page.press_release');
Route::get('/constitution', 'Frontend\PagesController@constitution')->name('page.constitution');

Route::get('/contact', 'Frontend\PagesController@contact')->name('page.contactus');





Route::get('login', 'Frontend\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Frontend\Auth\LoginController@login');

Route::get('register', 'Frontend\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Frontend\Auth\RegisterController@register');

Route::get('password/reset', 'Frontend\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Frontend\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Frontend\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Frontend\Auth\ResetPasswordController@reset')->name('password.update');

Route::post('logout', 'Frontend\Auth\LoginController@logout')->name('logout');

Route::get('admin', 'Admin\Auth\LoginController@showLoginForm');
Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\Auth\LoginController@login')->name('admin.login');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'assign.guard:admin,admin/login'], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

    Route::get('/logout', 'Auth\LoginController@logout')->name('admin.logout');

    Route::get('blogs', 'BlogsController@index')->name('admin.blogs.index');
    Route::post('blogs/collection-data', 'BlogsController@data')->name('blog-collection-data');
    Route::get('blogs/craete', 'BlogsController@create')->name('admin.blogs.create');
    Route::post('blogs/craete', 'BlogsController@create')->name('admin.blogs.createsave');
    Route::get('blogs/edit/{id}', 'BlogsController@edit')->name('admin.blogs.edit');
    Route::post('blogs/edit/{id}', 'BlogsController@edit')->name('admin.blogs.editsave');
    Route::post('blogs/delete/{id}', 'BlogsController@delete')->name('admin.blogs.delete');
    Route::get('blogs/view/{id}', 'BlogsController@view')->name('admin.blogs.view');

    Route::get('events', 'EventsController@index')->name('admin.events.index');
    Route::post('events/collection-data', 'EventsController@data')->name('events-collection-data');
    Route::get('events/craete', 'EventsController@create')->name('admin.events.create');
    Route::post('events/craete', 'EventsController@create')->name('admin.events.createsave');
    Route::get('events/edit/{id}', 'EventsController@edit')->name('admin.events.edit');
    Route::post('events/edit/{id}', 'EventsController@edit')->name('admin.events.editsave');
    Route::post('events/delete/{id}', 'EventsController@delete')->name('admin.events.delete');
    Route::get('events/view/{id}', 'EventsController@view')->name('admin.events.view');


    Route::get('users', 'UsersController@index')->name('admin.users.index');
    Route::post('users/collection-data', 'UsersController@data')->name('users-collection-data');
    Route::get('users/view/{id}', 'UsersController@view')->name('admin.users.view');
    Route::get('users/active_inactive/{id}/{state}', 'UsersController@active_inactive')->name('admin.users.active_inactive');
    
    Route::get('/email/compose', 'MailController@index')->name('admin.email.compose');
    Route::post('email/compose', 'MailController@postComposeEmail')->name('postComposeEmail');
    
    
});


Route::group(['namespace' => 'User', 'prefix' => 'user'], function() {
    
    
            
    Route::get('/dashboard', 'DashboardController@index')->name('user.dashboard');
    Route::post('/logout', 'Frontend\Auth\LoginController@logout')->name('user.logout');
    
    
    Route::get('/getUserProfile', 'UserController@getUserProfile')->name('user.getUserProfile');
    Route::post('/updateUserProfile', 'UserController@updateUserProfile')->name('user.updateUserProfile');
    
//    Route::get('events', 'EventsController@index')->name('user.events');
    Route::get('events/upcoming', 'EventsController@upcomingEvents')->name('user.events.upcoming');
    Route::get('events/past', 'EventsController@pastEvents')->name('user.events.past');
    
    Route::post('events/upcoming-data', 'EventsController@upcomingsData')->name('events-upcoming-data');
    Route::post('events/past-data', 'EventsController@pastData')->name('events-past-data');
//    Route::get('events/craete', 'EventsController@create')->name('admin.events.create');
//    Route::post('events/craete', 'EventsController@create')->name('admin.events.createsave');
//    Route::get('events/edit/{id}', 'EventsController@edit')->name('admin.events.edit');
//    Route::post('events/edit/{id}', 'EventsController@edit')->name('admin.events.editsave');
//    Route::post('events/delete/{id}', 'EventsController@delete')->name('admin.events.delete');
    Route::get('events/view/{id}', 'EventsController@view')->name('user.events.view');
    
    Route::get('/saveUserEvent/{id}', 'EventsController@saveUserEvent')->name('page.saveUserEvent');
    
});




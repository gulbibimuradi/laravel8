<?php

use Illuminate\Support\Facades\Route;

// ADMIN ROUTES START HERE
Route::get('/admin', function(){
  return redirect(route('admin.dashboard'));
});


//Admin Dashboard 
Route::name('admin.')->group(function() {
  
  //Admin Auth Routes
  Route::get('admin/enter', 'Admin\AuthController@showLoginForm')->name('login');
  Route::post('admin/enter', 'Admin\AuthController@login')->name('login.submit');
  Route::get('admin/exit', 'Admin\AuthController@logout')->name('logout');
  Route::get('admin/changePassword', 'Admin\PasswordController@showChangePassword')->name('password.change');
  Route::post('admin/changePassword', 'Admin\PasswordController@changePassword')->name('password.change.submit');

  
  Route::get('/admin/dashboard', 'Admin\AdminController@index')->name('dashboard');

  // Slider Routes
  Route::resource('admin/slider', 'Admin\SliderController');

  // Testimonial Routes
  Route::resource('admin/testimonial', 'Admin\TestimonialController');

  // About Routes
  Route::name('about.')->group(function(){
    // Main About
    Route::get('admin/about', 'Admin\AboutController@index')->name('index');
    Route::patch('admin/about/{about}', 'Admin\AboutController@update')->name('update');
  });

  // Info
  Route::get('admin/info', 'Admin\InfoController@index')->name('info.index');
  Route::patch('admin/info/{info}', 'Admin\InfoController@update')->name('info.update');

  // Services Routes
  // All Services
  Route::resource('admin/service', 'Admin\ServiceController');
});
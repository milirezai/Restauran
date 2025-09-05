<?php
use System\Router\Web\Route;



// home
Route::get('/','HomeController@index','index');
Route::get('/home','HomeController@index','index');

// about
Route::get('/about','HomeController@about','about');

// services
Route::get('/services','HomeController@services','services');

// menu
Route::get('/menu','HomeController@menu','menu');
Route::post('/menu/search','HomeController@search','menu.search');

// booking
Route::get('/booking','HomeController@booking','booking');
Route::post('/booking','HomeController@bookingStore','booking.store');

// Contact
Route::get('/contact','HomeController@contact','contact');
Route::post('/contact','HomeController@storeContact','contact.store');

// footer-news-letter
Route::post('/news-letter','HomeController@newsLetter','newsLetter');



// user-panel
Route::get('/my-panel','UserController@index','my.panel.index');


// cart
Route::get('/cart/{id}','CartController@addCart','cart.add');
Route::get('/cart/remove/{id}','CartController@removeItem','cart.removeItem');
Route::get('/cart/remove-number/{id}','CartController@removeItemNumber','cart.removeItemNumber');






// auth
Route::get("/register","auth\RegisterController@show","auth.register.show");
Route::post("/register","auth\RegisterController@register","auth.register");
Route::get("/activation/{token}","auth\RegisterController@activation","auth.activation");
Route::get("/login","auth\LoginController@show","auth.login.show");
Route::post("/login","auth\LoginController@login","auth.login");
Route::get("/forgot","auth\ForgotController@show","auth.forgot.show");
Route::post("/forgot","auth\ForgotController@forgot","auth.forgot");
Route::get("/reset-password/{token}","auth\ResetPasswordController@show","auth.reset-password.show");
Route::post("/reset-password/{token}","auth\ResetPasswordController@resetPassword","auth.reset-password");
Route::get("/logout","auth\LogoutController@logout","auth.logout");
















// admin
Route::get('/admin','admin\AdminController@index','admin.index');

// admin-category
Route::get('/admin/category','admin\CategoryController@index','admin.category.index');
Route::get("/admin/category/create","admin\CategoryController@create","admin.category.create");
Route::post("/admin/category/store","admin\CategoryController@store","admin.category.store");
Route::get("/admin/category/edit/{id}","admin\CategoryController@edit","admin.category.edit");
Route::put("/admin/category/update/{id}","admin\CategoryController@update","admin.category.update");
Route::delete("/admin/category/delete/{id}","admin\CategoryController@destroy","admin.category.delete");

// admin-product
Route::get('/admin/product','admin\ProductController@index','admin.product.index');
Route::get('/admin/product/status/{id}','admin\ProductController@status','admin.product.status');
Route::get('/admin/product/delete/{id}','admin\ProductController@destroy','admin.product.delete');
Route::get('/admin/product/create','admin\ProductController@create','admin.product.create');
Route::post('/admin/product/create','admin\ProductController@store','admin.product.store');
Route::get("/admin/product/edit/{id}","admin\ProductController@edit","admin.product.edit");
Route::put("/admin/product/update/{id}","admin\ProductController@update","admin.product.update");

// admin-newsLetter
Route::get('/admin/news-letter','admin\NewsLetterController@index','admin.newsLetter.index');
Route::get('/admin/news-letter/message/{id}','admin\NewsLetterController@message','admin.newsLetter.message');
Route::post('/admin/news-letter/message/answer/{id}','admin\NewsLetterController@answer','admin.newsLetter.answer');

// admin-our-team
Route::get('/admin/our-team','admin\OurTeamController@index','admin.ourTeam.index');
Route::get('/admin/our-team/status/{id}','admin\OurTeamController@status','admin.ourTeam.status');
Route::get('/admin/our-team/create','admin\OurTeamController@create','admin.ourTeam.create');
Route::post('/admin/our-team/store','admin\OurTeamController@store','admin.ourTeam.store');
Route::get('/admin/our-team/delete/{id}','admin\OurTeamController@destroy','admin.ourTeam.delete');
Route::get('/admin/our-team/edit/{id}','admin\OurTeamController@edit','admin.ourTeam.edit');
Route::put('/admin/our-team/update/{id}','admin\OurTeamController@update','admin.ourTeam.update');

// admin-contact
Route::get('/admin/contact','admin\ContactController@index','admin.contact.index');
Route::get('/admin/contact/message/{id}','admin\ContactController@message','admin.contact.message');
Route::post('/admin/contact/message/answer/{id}','admin\ContactController@answer','admin.contact.message.answer');
Route::get('/admin/contact/message/delete/{id}','admin\ContactController@destroy','admin.contact.delete');

// admin-users
Route::get("/admin/users","admin\UserController@index","admin.users.index");
Route::get("/admin/users/status/{id}","admin\UserController@status","admin.users.status");


// admin-orders
Route::get("/admin/orders","admin\OrderController@index","admin.orders.index");
Route::get("/admin/orders/show/{id}","admin\OrderController@order","admin.orders.show");
Route::get("/admin/orders/delivery/{id}","admin\OrderController@delivery","admin.orders.delivery");

// admin-payment
Route::get("/admin/payments","admin\PaymentController@index","admin.payments.index");
Route::get("/admin/payment/confirmed/{id}","admin\PaymentController@confirmed","admin.payments.confirmed");


// admin-bookings
Route::get("/admin/bookings","admin\BookingController@index","admin.bookings.index");
Route::get("/admin/bookings/confirmed/{id}","admin\BookingController@confirmed","admin.bookings.confirmed");
Route::get("/admin/bookings/cancel/{id}","admin\BookingController@cancel","admin.bookings.cancel");













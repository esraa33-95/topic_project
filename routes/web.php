<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//public pages
Route::group([
    'controller'=>PublicController::class,
],function(){

Route::get('index','index')->name('index');
Route::get('topiclist','topiclist')->name('topiclist');
Route::get('testimonials','testimonials')->name('testimonials');
Route::get('contact','contact')->name('contact');
Route::get('topic-details/{id}','topicsdetail')->name('topicdetail');

});



//admin pages 
Route::group([
    'prefix'=>'admin',    
],function(){
Route::group([
    'prefix'=>'categories',
    'as'=>'categories.',
    'controller'=>CategoryController::class,
    'middleware'=>['verified','active'],
],function(){
    Route::get('create','create')->name('create');
    Route::post('store','store')->name('store');
    Route::get('index','index')->name('index');
    Route::get('edit/{id}','edit')->name('edit');
    Route::put('update/{id}','update')->name('update');
    Route::get('delete/{id}','destroy')->name('destroy');
   
 });

Route::group([
    'prefix'=>'topic',
    'as'=>'topic.',
    'controller'=>TopicController::class,
],function(){
Route::get('create','create')->name('create');
Route::post('store','store')->name('store');
Route::get('index','index')->name('index');
Route::get('edit/{id}','edit')->name('edit');
Route::put('update/{id}','update')->name('update');
Route::get('delete/{id}','destroy')->name('destroy');
Route::get('topic-details/{id}','show')->name('topicdetail');
});

Route::group([
    'prefix'=>'user',
    'as'=>'user.',
    'controller'=>UserController::class,
],function(){
Route::get('create','create')->name('create');
Route::post('store','store')->name('store');
Route::get('index','index')->name('index');
Route::get('edit/{id}','edit')->name('edit');
Route::put('update/{id}','update')->name('update');

});

Route::group([
    'prefix'=>'testimonial',
    'as'=>'testimonial.',
    'controller'=>TestimonialController::class,
],function(){
Route::get('create','create')->name('create');
Route::post('store','store')->name('store');
Route::get('index','index')->name('index');
Route::get('edit/{id}','edit')->name('edit');
Route::put('update/{id}','update')->name('update');
Route::get('delete/{id}','destroy')->name('destroy');
});

Route::group([
    'prefix'=>'message',
    'as'=>'message.',
    'controller'=>MessageController::class,
],function(){
Route::get('index','index')->name('index');
Route::get('message-details/{id}','show')->name('messagedetails');
Route::get('edit/{id}','edit')->name('edit');
Route::get('delete/{id}','destroy')->name('destroy');

});


});


Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//contact
Route::get('contactus', [PublicController::class, 'contact'])->name('contact.index'); //show page 
Route::post('contact', [ContactController::class, 'store'])->name('store'); //send db and mailtrap

// Route to increment views of topic
Route::get('/topic/{id}/increment-views', [TopicController::class, 'incrementViews'])->name('topic.incrementViews');

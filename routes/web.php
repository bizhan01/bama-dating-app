<?php
use Illuminate\Support\Facades\Route;


// <!--
// ***********************************************************
// * ******************************************************* *
// * * Author: Rahmatullah Bizhan                          * *
// * * Email: rahmatullahbizhan@gmail.com                  * *
// * * Please Kindly Report any error or bug you may face. * *
// * * Contact me if you have any questions :)             * *
// * ******************************************************* *
// ***********************************************************
// -->
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Users CRUD  Operation Routes
Route::get('addUser', 'UserOperationController@index')->name('addUser');
Route::post('/createUser', 'UserOperationController@store')->name('createUser');
Route::get('usersList', [App\Http\Controllers\UserOperationController::class,'usersList'])->name('usersList');


Route::get('/deleteUser/{id}','UserOperationController@destroy');
Route::get('/editUser/{id}','UserOperationController@showInfo');
Route::post('/update/{id}','UserOperationController@edit');

Route::get('blockList', [App\Http\Controllers\UserOperationController::class,'blockList'])->name('blockList');
Route::get('/blockUser/{id}','UserOperationController@show');
Route::post('/updateUserStatus/{id}','UserOperationController@edit');
Route::get('/unBlockUser/{id}','UserOperationController@unBlock');
Route::post('/updateUser/{id}', 'UserOperationController@edit')->name('updateUserStatus/{id}');

Route::get('profile', [App\Http\Controllers\UserProfileController::class,'profile'])->name('profile');
Route::post('updateUserInfo', [App\Http\Controllers\UserProfileController::class,'updateUserInfo'])->name('updateUserInfo');
Route::post('updateUserImage', [App\Http\Controllers\UserProfileController::class,'updateUserImage'])->name('updateUserImage');
Route::post('updateUserPass', [App\Http\Controllers\UserProfileController::class,'updateUserPass'])->name('updateUserPass');



// Advertisement Section Routes
Route::get('productGeneralList', [App\Http\Controllers\AdvertisementController::class,'productGeneralList'])->name('productGeneralList');
Route::get('/addAdv', [App\Http\Controllers\AdvertisementController::class,'add'])->name('addAdv');
Route::get('/advertisement', [App\Http\Controllers\AdvertisementController::class,'index'])->name('advertisement');
Route::get('/advertisementList',[App\Http\Controllers\AdvertisementController::class,'advertisementList'])->name('advertisementList');
Route::post('/addAdvertisement', [App\Http\Controllers\AdvertisementController::class,'store'])->name('addAdvertisement');
Route::get('/editAdvertisement/{id}',[App\Http\Controllers\AdvertisementController::class,'show'])->name('editAdvertisement/{id}');
Route::post('/updatedAdvertisement/{id}',[App\Http\Controllers\AdvertisementController::class,'edit'])->name('updatedAdvertisement/{id}');
Route::get('/deleteAdvertisement/{id}',[App\Http\Controllers\AdvertisementController::class,'destroy'])->name('deleteAdvertisement/{id}');
Route::get('/blockAdv',[App\Http\Controllers\AdvertisementController::class,'blockAdv'])->name('blockAdv');
Route::get('/unBlockAdv',[App\Http\Controllers\AdvertisementController::class,'unBlockAdv'])->name('unBlockAdv');

// Post Section Routes
Route::get('/post', [App\Http\Controllers\PostController::class,'index'])->name('post');
Route::post('/addPost', [App\Http\Controllers\PostController::class,'store'])->name('addPost');
Route::get('/deletePost/{id}',[App\Http\Controllers\PostController::class,'destroy'])->name('deletePost/{id}');
Route::get('/editPost/{id}',[App\Http\Controllers\PostController::class,'show'])->name('editPost/{id}');
Route::post('/updatePost/{id}',[App\Http\Controllers\PostController::class,'edit'])->name('updatePost/{id}');

// Friend Request Section Routes
Route::post('/sendRequest', [App\Http\Controllers\FriendController::class,'sendRequest'])->name('sendRequest');
Route::post('/acceptRequest/{id}',[App\Http\Controllers\FriendController::class,'acceptRequest'])->name('acceptRequest/{id}');
Route::post('/favorite/{id}', [App\Http\Controllers\FriendController::class, 'favorite'])->name('favorite');





// Search Section Routes
Route::post('/search', 'SearchController@search')->name('search');
Route::post('/searchBeautySalon', 'SearchController@searchBeautySalon')->name('searchBeautySalon');
Route::post('/searchStore', 'SearchController@searchStore')->name('searchStore');
Route::post('/searchProduct', 'SearchController@searchProduct')->name('searchProduct');
Route::get('/publicProfile/{id}', 'SearchController@publicProfile')->name('publicProfile/{id}');



// Article Controller section routes
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::post('/savePost', [App\Http\Controllers\PostController::class, 'store'])->name('savePost');
Route::post('/updatePost/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('updatePost/{id}');
Route::get('/deletePost/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('deletePost/{id}');


// Services Controller section routes
Route::get('/ads', [App\Http\Controllers\AdsController::class, 'index'])->name('ads');
Route::post('/saveAds', [App\Http\Controllers\AdsController::class, 'store'])->name('saveAds');
Route::post('/updateAds/{id}', [App\Http\Controllers\AdsController::class, 'edit'])->name('updateAds/{id}');
Route::get('/deleteAds/{id}',[App\Http\Controllers\AdsController::class, 'destroy'])->name('deleteAds/{id}');


// Chat Controller section routes

Route::middleware(['auth'])->group(function () {
    Route::get('/conversations', [App\Http\Controllers\ConversationController::class, 'index'])->name('conversations.index');
    Route::get('/conversations/{conversation}', [App\Http\Controllers\ConversationController::class, 'show'])->name('conversations.show');
    Route::post('/startConversation', [App\Http\Controllers\ConversationController::class, 'store'])->name('startConversation');
    Route::post('/sendMessage', [App\Http\Controllers\MessageController::class, 'store'])->name('sendMessage');
});


// Search Controller  section routes
Route::post('/advanceSearch', [App\Http\Controllers\SearchController::class, 'advanceSearch'])->name('advanceSearch');
Route::post('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::post('/search_posts', [App\Http\Controllers\SearchController::class, 'search_posts'])->name('search_posts');
Route::post('/search_ads', [App\Http\Controllers\SearchController::class, 'search_ads'])->name('search_ads');

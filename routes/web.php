<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/readmore?id={id}','BlogControllerLink@show');

Route::get('/main','ShowIndexController@showblog');

Route::get('/admin.dashboard',function(){
    return view('admin.dashboard');
})->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Route Slider
Route::get('/admin.slidermanage','SliderControllerLink@index')->middleware('auth');
Route::post('/done.slider','SliderControllerLink@store')->middleware('auth');
Route::delete('/del.slider/{id}','SliderControllerLink@destroy')->middleware('auth');
Route::get('/edit.slider/{id}','SliderControllerLink@edit')->middleware('auth');
Route::put('/update.slider/{id}','SliderControllerLink@update')->middleware('auth');

Route::get('/insertslider', function () {
    return view('admin.crudslider.insert');
})->middleware('auth');




//Route Blog
Route::get('/admin.blogmanage','BlogControllerLink@index')->middleware('auth');
Route::post('/done.blog','BlogControllerLink@store')->middleware('auth');
Route::delete('/del.blog/{id}','BlogControllerLink@destroy')->middleware('auth');
Route::get('/edit.blog/{id}','BlogControllerLink@edit')->middleware('auth');
Route::put('/update.blog/{id}','BlogControllerLink@update')->middleware('auth');

Route::get('/insertblog', function () {
    return view('admin.crudblog.insert');
})->middleware('auth');





//Route Brochure

Route::get('/admin.brochuremanage','BrochureControllerLink@index')->middleware('auth');
Route::post('/done.brochure','BrochureControllerLink@store')->middleware('auth');
Route::delete('/del.brochure/{id}','BrochureControllerLink@destroy')->middleware('auth');
Route::get('/edit.brochure/{id}','BrochureControllerLink@edit')->middleware('auth');
Route::put('/update.brochure/{id}','BrochureControllerLink@update')->middleware('auth');

Route::get('/insertbrochure', function () {
    return view('admin.crudbrochure.insert');
})->middleware('auth');





//Route Youtube

Route::get('/admin.youtubemanage','YoutubeControllerLink@index')->middleware('auth');
Route::post('/done.youtube','YoutubeControllerLink@store')->middleware('auth');
Route::delete('/del.youtube/{id}','YoutubeControllerLink@destroy')->middleware('auth');
Route::get('/edit.youtube/{id}','YoutubeControllerLink@edit')->middleware('auth');
Route::put('/update.youtube/{id}','YoutubeControllerLink@update')->middleware('auth');

Route::get('/insertyoutube', function () {
    return view('admin.crudyoutube.insert');
})->middleware('auth');



//Route ImageActivity
Route::get('/admin.imageactivitymanage','ImageactivityControllerLink@index')->middleware('auth');
Route::post('/done.imageactivity','ImageactivityControllerLink@store')->middleware('auth');
Route::delete('/del.imageactivity/{id}','ImageactivityControllerLink@destroy')->middleware('auth');
Route::get('/edit.imageactivity/{id}','ImageactivityControllerLink@edit')->middleware('auth');
Route::put('/update.imageactivity/{id}','ImageactivityControllerLink@update')->middleware('auth');

Route::get('/insertimageactivity', function () {
    return view('admin.crudimageactivity.insert');
})->middleware('auth');



//Route Map
Route::get('/admin.mapmanage','MapControllerLink@index')->middleware('auth');
Route::post('/done.map','MapControllerLink@store')->middleware('auth');
Route::delete('/del.map/{id}','MapControllerLink@destroy')->middleware('auth');
Route::get('/edit.map/{id}','MapControllerLink@edit')->middleware('auth');
Route::put('/update.map/{id}','MapControllerLink@update')->middleware('auth');

Route::get('/insertmap', function () {
    return view('admin.crudmap.insert');
})->middleware('auth');


//Route User
Route::get('/admin.usermanage','UserControllerLink@index')->middleware('admin');

Route::delete('/del.user/{id}','UserControllerLink@destroy')->middleware('admin');
Route::get('/edit.user/{id}','UserControllerLink@edit')->middleware('admin');
Route::put('/update.user/{id}','UserControllerLink@update')->middleware('admin');



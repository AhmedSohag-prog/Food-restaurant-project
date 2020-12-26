<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/	dev/{name}/{job}', function ($name='sohag',$job='')
// {
// 	echo "I am $name and I am a $job developer";
// });

Route::get('/','blogController@showHomepage');
Route::get('blog','blogController@showBlogpage');
Route::get('gallery','blogController@showGallerypage');
Route::get('location','blogController@showLocationpage');
Route::get('menu','blogController@showMenupage');
Route::get('reservation','blogController@showReservationpage');
Route::get('news','blogController@showNewspage');
Route::get('staff','blogController@showStaffpage');

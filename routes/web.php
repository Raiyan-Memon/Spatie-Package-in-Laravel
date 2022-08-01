<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use Spatie\Permission\Models\Role;
// use Illuminate\Routing\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts','PostController');
Route::resource('/admin', 'AdminController')->middleware('role:admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



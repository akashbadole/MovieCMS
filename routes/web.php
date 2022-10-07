<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return(view('admin_panel.dashboard'));
// });

// Route::get('/blog-list', function(){
//     return(view('admin_panel.blog-list'));
// });

// Route::get('/addblog', function(){
//     return(view('admin_panel.addblog'));
// });

// Route::get('/addcategory', function(){
//     return(view('admin_panel.addcategory'));
// });


Route::get('/', [App\Http\Controllers\adminController\HomeController::class, 'index']);
Route::get('/blog-list', [App\Http\Controllers\adminController\bloglist::class, 'index']);
Route::get('/addblog', [App\Http\Controllers\adminController\addblogController::class, 'index']);
Route::post('/add-blog-data', [App\Http\Controllers\adminController\addblogController::class, 'addblog']);
Route::get ('/addcategory', [App\Http\Controllers\adminController\addcategoryController::class, 'index']);
Route::post('/addcategory-data', [App\Http\Controllers\adminController\addcategoryController::class, 'add_category']);

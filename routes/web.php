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
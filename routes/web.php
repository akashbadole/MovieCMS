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

// php artisan route:cache    

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

Route::get('/admin', [App\Http\Controllers\adminController\HomeController::class, 'index']);
Route::get('/blog-list', [App\Http\Controllers\adminController\bloglist::class, 'index']);
Route::get('/addblog', [App\Http\Controllers\adminController\addblogController::class, 'index']);
Route::post('/add-blog-data', [App\Http\Controllers\adminController\addblogController::class, 'addblog']);
Route::get ('/addcategory', [App\Http\Controllers\adminController\addcategoryController::class, 'index']);
Route::post('/addcategory-data', [App\Http\Controllers\adminController\addcategoryController::class, 'add_category']);
// Route::get('/addcategory', [App\Http\Controllers\adminController\addcategoryController::class, 'index']);
Route::get('/addcomment', [App\Http\Controllers\adminController\CommentController::class, 'index']); //php artisan route:cache working
Route::post('/addcommentData', [App\Http\Controllers\adminController\CommentController::class, 'add_comment']);
Route::get('/addauthor', [App\Http\Controllers\adminController\AuthorController::class, 'index']);
Route::post('/addauthor-data', [App\Http\Controllers\adminController\AuthorController::class, 'addAuthor']);

Route::get('/delete-data/{id}', [App\Http\Controllers\adminController\bloglist::class, 'delete']);

Route::get('/update-record/{id}', [App\Http\Controllers\adminController\bloglist::class, 'edit']);
Route::post('/update-blog-data/{id}', [App\Http\Controllers\adminController\bloglist::class, 'update']);

// for addcategory -  category delete 
Route::get('/category-delete/{id}', [App\Http\Controllers\adminController\addcategoryController::class, 'delete']);
// for addcategory -  category edit
Route::get('/category-edit/{id}', [App\Http\Controllers\adminController\addcategoryController::class, 'edit']);
// for addcategory -  category edit
Route::post('/category-update-data/{id}', [App\Http\Controllers\adminController\addcategoryController::class, 'update']);

// Author Edit
Route::get('/author-edit/{id}', [App\Http\Controllers\adminController\AuthorController::class, 'edit']);
// Author Update
Route::post('/author-update-data/{id}', [App\Http\Controllers\adminController\AuthorController::class, 'update']);
// Author delete
Route::get('/author-delete/{id}', [App\Http\Controllers\adminController\AuthorController::class, 'delete']);


// user Controllers - index 
Route::get('/', [App\Http\Controllers\userController\userController::class, 'index']);

// Movie Detail Blog Controller - single view
Route::get('movie_detail/{id}', [App\Http\Controllers\userController\MovieDetailController::class, 'index']);

// Movie Comment Controller - single view
Route::post('add-comment/{id}', [App\Http\Controllers\userController\CommentController::class, 'add_comment']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

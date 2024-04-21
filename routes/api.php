<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::post('/author/signup',[UsersController::class, 'SignUp']);

Route::post('/author/signup',[UsersController ::class,'SignUp']);
Route::post('/users/login',[UsersController ::class,'login']);
Route::get('/allusers', [UsersController :: class, 'allUsers']);
Route::get('/deleteuser/{id}', [UsersController :: class, 'deleteUser']);
Route::get('/usercount', [UsersController :: class, 'count']);
Route::get('/adminsonly', [UsersController :: class, 'adminsOnly']);

Route::get('/allblogs', [BlogsController :: class, 'show']);
Route::get('/deleteblog/{id}', [BlogsController :: class, 'deleteblog']);
Route::get('/blogcount', [BlogsController :: class, 'count']);
Route::get('/popular', [BlogsController :: class, 'popular']);

Route::get('/getblog/{id}', [BlogsController :: class, 'getBlogById']);
Route::get('/getbloguid/{id}', [BlogsController :: class, 'getBlogByUID']);
Route::get('/getblogcount/{id}', [BlogsController :: class, 'getBlogCount']);
Route::post('/createblog', [BlogsController :: class, 'store']);
Route::get('/edit/{id}', [BlogsController :: class, 'getBlogById']);
Route::post('/updateblogs', [BlogsController :: class, 'update']);
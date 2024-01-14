<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|docker
*/

// Route::get('/', function () {

//     dd(config('services.mailgun.domain'));
//     //Debugbar::addMessage('INFO');
//     return view('welcome');
// });

// //Route::view('/', 'home');

Route::get('/', HomeController::class);
Route::get('/home', HomeController::class);

Route::get('/blog', [PostController::class,'index']);

Route::get('/blog/create', [PostController::class,'create']);
Route::post('/blog', [PostController::class,'store']);

Route::get('/blog/{id}', [PostController::class,'show']);


 //post mehtod
 
 
// //patch
// Route::get('/blog/edit/{id}', [PostController::class,'edit']);
// Route::patch('/blog/{id}', [PostController::class,'update']);

// //delete
 Route::delete('/blog/{id}', [PostController::class,'destroy']);

//Route::match(['GET','POST'],'/blog', [PostController::class,'index']);
//Route::any('/blog', [PostController::class,'index']);


//route for invoke method


Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

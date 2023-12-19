<?php

use App\Http\Controllers\PostController;
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

// Start CRUD setup
Route::resource('posts', PostController::class);
// End CRUD setup

Route::get('/', function () {
  return view('welcome');
});
// Route::view('/welcome', 'welcome');

// Route::get('/home', function () {
//     return view('home');
// });


// Setup routes
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);
// Route::match(['get', 'post'], '/', function() {})


// Route Passing data to view
// Route::view('/welcome', 'welcome', ['name' => "Taylor"]);

// From router to controller
// Route::get('/blade-syntax/{num}', function ($num) {
//   return view('blade-syntax', ['num' => $num]);
// });
// Route::get('/user', [UserController::class, 'index']);

// Route parameters
// Route::get('post/{slug}', [PostController::class, 'show']);
// Route::get('category/{category}/post/{slug}', [PostController::class, 'show']);
// Route::get('post/{slug?}', [PostController::class, 'show']);
// Route::get('user/{id}', [UserController::class, 'show'])->where('id', '[0-9]+');


// Named routers
// Route::get('user/profile', [UserController::class, 'show'])->name('profile');
// And now, when we need to access this URL, all we need to do is invoke the function route('profile').


// Group routers
// Route::middleware(['auth'])->group(function () {
//     Route::get('/user/profile', [UserController::class, 'show']);
//     Route::get('/user/setting', [UserController::class, 'settings']);
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'show']);
// });
// All the routers defined in this group will have the prefix /admin/.

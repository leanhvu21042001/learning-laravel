# Beginner 1

## Download Composer

- ![https://getcomposer.org/](Downoload Composer)

## Creating a Laravel project (Use Composer)

- composer create-project laravel/laravel example-app
- run project: `php artisan serve`

## Structure

```
.
├── app
│ ├── Console
│ ├── Exceptions
│ ├── Http
│ │ ├── Controllers
│ │ └── Middleware
│ ├── Models
│ └── Providers
├── bootstrap
├── config
├── database
│ ├── factories
│ ├── migrations
│ └── seeders
├── public
├── resources
│ ├── css
│ ├── js
│ └── views
├── routes
├── storage
│ ├── app
│ ├── framework
│ └── logs
├── tests
│ ├── Feature
│ └── Unit
└── vendor
```

## Setup Route

- Route methods

```php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);


Route::match(['get', 'post'], '/', function () {
    . . .
});

Route::any('/', function () {
    . . .
});
```

- Passing data to view

```php
// Only need return the view
Route::view('/welcome', 'welcome');

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
```

- From `router` to `controller`

```php
Route::get('/user', [UserController::class, 'index']);
```

- Route parameters

```php
Route::get('post/{slug}', [PostController::class, 'show']);

Route::get('/post/{slug}', function ($slug) {
    return $slug;
});

Route::get('category/{category}/post/{slug}', [PostController::class, 'show']);

Route::get('post/{slug?}', [PostController::class, 'show']);

// Validate route parameter
Route::get('user/{id}', [UserController::class, 'show'])->where('id', '[0-9]+');

```

- Named routers

```php
Route::get('user/profile', [UserController::class, 'show'])->name('profile');
```

> And now, when we need to access this URL, all we need to do is invoke the function `route('profile')`.

- Group routers

```php
// All routes will be assigned the middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/user/profile', [UserController::class, 'show']);
    Route::get('/user/setting', [UserController::class, 'setting']);
});
```

```php
// All routes define in group have the prefix /admin/...
Route::prefix('admin')->group(function () {
    Route::get('/users', [UserController::class, 'show']);
    . . .
});
```

## Middleware

- Create middleware

```sh
php artisan make:middleware EnsureTokenIsValid
```

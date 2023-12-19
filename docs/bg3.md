# Beginner 2

## Designing database structure

- Create table `posts`

```sh
php artisan make:migration create_posts_table
```

```php
// Add these fields
$table->string('title');
$table->text('content');
```

```sh
php artisan migrate
```

- Create model `Post`

````sh
php artisan make:model Post```
````

- Create controller PostController

```sh
php artisan make:controller PostController --resource
```

- Check what routes are registered

```sh
php artisan route:list
```

## The CRUD operations

## The create action

## The list action

## The show action

## The update action

## The delete action

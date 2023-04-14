# Install
### Trait
Add **HasUserStatus** trait to User model

```php

use Atin\LaravelSocialAuth\Traits\HasUserStatus;

class User extends Authenticatable
{
    use HasUserStatus, …
```

Add EnsureUserIsNotBlocked middleware to middleware array in *app/Http/Kernel.php*:
```php
  protected $middlewareGroups = [
        'web' => [
            …
            \Atin\LaravelUserStatuses\Http\Middleware\EnsureUserIsNotBlocked::class,
        ],
    ];
```

# Publishing
### Migrations
```php
php artisan vendor:publish --tag="laravel-user-statuses-migrations"
```

### Localization
```php
php artisan vendor:publish --tag="laravel-user-statuses-lang"
```
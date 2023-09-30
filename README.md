# Install
### Trait and Casts
Add ```HasUserStatus``` trait and casts to User model.

```php
use Atin\LaravelSocialAuth\Traits\HasUserStatus;

class User extends Authenticatable
{
    use HasUserStatus;

    protected $casts = [
        'status' => \Atin\LaravelUserStatuses\Enums\UserStatus::class,
    ];
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

Run migrations:
```php
php artisan migrate
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
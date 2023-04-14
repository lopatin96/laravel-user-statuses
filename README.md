# Install
### Trait
Add **HasUserType** trait to User model

```php

use Atin\LaravelSocialAuth\Traits\HasUserType;

class User extends Authenticatable
{
    use HasUserType, …
```

# Publishing
### Migrations
```php
php artisan vendor:publish --tag="laravel-user-types-migrations"
```
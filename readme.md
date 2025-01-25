# Steps
1. Clone
1. `cd` into project directory
1. Install dependencies



## Install dependencies
```bash
SYMFONY_ENV=prod APP_ENV=prod composer install --no-dev --optimize-autoloader
```

```php
php bin/console cache:clear --env=prod --no-debug
php bin/console cache:warmup --env=prod --no-debug

```

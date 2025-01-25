# Steps
1. Clone
1. `cd` into project directory
1. Install dependencies



## Prepare for production
```bash
export SYMFONY_ENV=prod
export APP_ENV=prod

# install dependencies
composer install --no-dev --optimize-autoloader

# prep assets and cache
php bin/console asset-map:compile
php bin/console cache:clear --env=prod --no-debug
php bin/console cache:warmup --env=prod --no-debug
```


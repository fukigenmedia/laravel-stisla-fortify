# Laravel + Stisla + FortifyUI

[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/fukigenmedia/laravel-stisla/pulls)

We were inspired by one of the [@nyancodeid](https://github.com/nyancodeid) repositories, [Laravel 8 + Stisla + Jetstream + Livewire](https://github.com/nyancodeid/laravel-8-stisla-jetstream).

Laravel Jetstream is excellent, equipped with livewire or inertiaJS. But not all developers know how to use it, that's why we wanted to revive the old way.

## What Inside?

- Laravel ^8.x - [Laravel Docs](https://laravel.com/docs/8.x/)
- FortifyUI ^1.3 - [FortifyUI](https://github.com/zacksmash/fortify-ui)
- Stisla Admin Template ^2.2.0 - [Stisla](https://getstisla.com/)

## How To Use This?

Download or clone this repo
```shell
$ git clone https://github.com/fukigenmedia/laravel-stisla.git
```

Install all dependency required by laravel.
```shell
$ composer install
$ composer dump-autoload
```

Generate app key, configure `.env` file and do migration.
```shell
# create copy of .env
$ cp .env.example .env

# create laravel key
$ php artisan key:generate

# run migration
$ php artisan migrate
```

## Screenshot

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Info about the project

A demo blog created with Laravel + Inertia.js.

## Initial config

Follow the guide here [Start Laravel Project](https://github.com/falconandrea/start-laravel-project/blob/main/README.md)

## How to run

After git clone, optional install Sail (if missing), copy and update .env file, run `sail up -d` and others commands in Initial Config guide.

Install PHP dependencies and NPM dependencies with:

```
sail composer install
sail npm ci
sail npm run dev
```

Create the demo admin user with the seeder:

```
sail artisan db:seed --class=FakeUserSeeder
# Username: admin@admin.it
# Password: password
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```

```

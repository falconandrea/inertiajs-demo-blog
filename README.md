<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Info about the project

A demo blog created with Laravel + Inertia.js (Vue3).
I used the TailwindCSS template found on the repository [Minimal Blog Template](https://github.com/tailwindtoolbox/Minimal-Blog) as the default layout.
The new features have been added:

-   pagination in the post list
-   a search bar to filter
-   login/logout for the admin
-   form to insert new posts
-   admin can update and delete posts
-   guests can comment on a post

## Initial config with Sail

Follow the guide here [Start Laravel Project](https://github.com/falconandrea/start-laravel-project/blob/main/README.md)

## How to run

Install PHP dependencies and NPM dependencies with:

```
composer install
npm ci
npm run dev
```

Copy .env.example in .env with

```
cp .env.example .env
```

and update data inside.

After run Sail, run:

```
sail artisan key:generate
sail artisan migrate
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

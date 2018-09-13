<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## How to run this project/repo

- Clone this repo
- Require composer and npm (make sure you have composer and npm installed on your machine)
- Copy .env.examples file, and rename it to .env
- run command `php artisan key:generate` for generating -> key app
- Config name, username, password for database in .env file
- run command `composer install` to install require packages
- run command `npm i` to install require depedencies
- run command `php artisan migrate --seed` to run all of migrations and to seed database (ignore `--seed-` if it doesn't necessary)
- run command `php artisan serve` and `npm run watch` (prefer to using tmux to run both commands on the single tab)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

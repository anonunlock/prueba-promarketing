# Admin System V1.0

## Requirements

- PHP >= 8.0
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Installation

- Clone the repo and `cd` into it
- Run `composer install`
- Rename or copy `.env.example` file to `.env`
- Run `php artisan key:generate`
- Set your database credentials in your `.env` file
- Run `php artisan migrate`
- Run `php artisan db:seed`
- Login with Email: admin@admin.com Password: Ap123456


## Note

Recommend to install this preset on a project that you are starting from scratch, otherwise your project's design might break.

If you found this project useful, then please consider giving it a :star:

## Credits

Laravel SB Admin 2 uses some open-source third-party libraries/packages, many thanks to the web community.

- Laravel - Open source framework.
- LaravelEasyNav - Making managing navigation in Laravel easy.
- SB Admin 2 - Thanks to Start Bootstrap.

## License

Licensed under the MIT license.

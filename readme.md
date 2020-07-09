<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
## Install project:

- Download composer https://getcomposer.org/download/
- Download NodeJs https://nodejs.org/en/download/
- Open the console and cd your project root directory
- Run `composer install` or ```php composer.phar install```
- Rename `.env.example` file to `.env`inside your project root and fill the database information. for example linux or mac ```cp .env.example .env && php artisan key:generate```
- Run ``npm install && npm run dev ``
- Run `php artisan migrate --seed`
- Run `php artisan storage:link`
- Run `php artisan serve`

  

##### You can now access your project at localhost:8000 :)

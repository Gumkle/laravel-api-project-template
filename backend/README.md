## Requirements
* https://laravel.com/docs/5.6/installation

## Installation 
To install the app follow these steps: 
1. Download/clone the repo,
2. open terminal and go to your project folder, 
3. type in `composer install`,
4. `npm install`,
5. `npm run dev`,
6. `sudo chmod -R 777 storage/`,
7. `sudo chmod -R 777 bootstrap/cache`,
8. copy .env.example to .env and fill it with data you'll need (database, mail),
9. `php artisan key:generate`,
10. `php artisan migrate:fresh --seed`
11. `php artisan passport:install` - Client keys will be returned after this command. For password authentication, we are interested in second of them, the password grant client. Remember this client's secret, for it will be needed for API communication later on. Don't foget it changes each time you run this command, and you should run it each time after `php artisan migrate:fresh --seed` is called.
12. voila

## Używanie

### Autoryzacja przez API

Tutaj będzie instrukcja autoryzacji klienta przez API

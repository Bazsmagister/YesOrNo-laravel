A simple app, that calls an api:

https://yesno.wtf/api

then shows the image that got from response.

(Similar to http://yesno.wtf)

# Clone the repo

```sh
git clone https://github.com/Bazsmagister/YesOrNo-laravel.git
```

cd [into_the_cloned_repo]

```sh
composer install
```

// linux:

```sh
cp .env.example .env
```

// windows:

```sh
copy .env.example .env
```

For Database there are more options:

1.Create an SQLite database.

```sh
touch database/database.sqlite
```

2.Or Edit .env file with database credentials

```sh
php artisan key:generate
```

```sh
php artisan migrate
```

<!---

## If there are some frontend stuff, you want to use, or using, Vue, react etc...:

`npm install`

`npm run dev` or `npx mix` //on newer version of laravel-mix

-->

## To make the app running:

```sh
php artisan serve
```

## License

This app is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

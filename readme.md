## Laravel 4 demo

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/bstrahija/l4-site-tutorial/trend.png)](https://bitdeli.com/free "Bitdeli Badge")


## Instructions

###### in terminal 
`$ composer install`

### Database
set your database configuration in app/config/database.php file

i.e.:

`'default' => 'mysql',`

...
`

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'YOUR_DATABASE_NAME', // ***
			'username'  => 'YOUR_USERNAME', // ***
			'password'  => 'YOUR_PASSWORD', // ***
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
`

#### migrate the database

`$ php artisan migrate --package=cartalyst/sentry`

then

`$ php artisan migrate`

#### seed the DB with initial demo data

`$ php artisan db:seed`

#### serve it locally

`$ php artisan serve`

open `http://localhost:8000` in the browser 
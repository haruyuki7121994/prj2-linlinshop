# prj2-linlinshop
git clone https://github.com/haruyuki7121994/prj2-linlinshop.git

git fetch

git checkout master

copy .env.example to .env

config db

composer update

php artisan migrate

composer dump-autoload

php artisan db:seed

php artisan vendor:publish --provider="Darryldecode\Cart\CartServiceProvider" --tag="config"

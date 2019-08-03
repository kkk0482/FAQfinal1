
# FAQfinal Project - Kalpit Khamar" 
"# FAQfinal1" 
"# FAQfinal1" 

To run the IS601-mini3pt3 project:
git clone https://github.com/kkk0482/FAQfinal1.git
CD into FAQfinal1 and run: composer install
cp .env.example to .env
run: php artisan key:generate
setup database (with sqlite or other https://laravel.com/docs/5.6/database)
run: php artisan migrate
run: phpunit
run: php artisan migrate:refresh --seed
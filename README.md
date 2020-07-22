instalacion de laravel
composer create-proyect --prefer-dist laravel/laravel "Nombre_del_proyecto" "version"
-------------------------------------------------------------------------------
Configuracion local credeciales de acceso
------------------------------------------------
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="Nombre_de_la_Base_de_datos" laravel
DB_USERNAME=root
DB_PASSWORD=
----------------------------------------------------
añadir inicio de session:
---------------------------------------------------
composer require laravel/ui
php artisan ui bootstrap --auth
npm install && npm run dev

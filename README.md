<p>instalacion de laravel</p>
composer create-proyect --prefer-dist laravel/laravel "Nombre_del_proyecto" "version"<br>
-------------------------------------------------------------------------------
<p>Configuracion local credeciales de acceso</p>
------------------------------------------------
<p>DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE="Nombre_de_la_Base_de_datos" laravel<br>
DB_USERNAME=root
DB_PASSWORD=</p>
----------------------------------------------------
<p>añadir inicio de session:</p>
---------------------------------------------------
composer require laravel/ui<br>
php artisan ui bootstrap --auth<br>
npm install && npm run dev<br>

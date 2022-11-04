<h1>PASO A PASO</h1>
<br>
Instalación

<p>
    <ul>
        <li>1: Clonamos el repositorio</li>
        <li>2: Ejecutamos composer install en la consola de comandos</li>
        <li>3: Creamos un archivo .env (variables de entorno) y pegamos el trozo de código que les dejo abajo</li>
        <li>4: Ejecutamos el comando php artisan migrate --seed</li>
        <li>5: Por ultimo inicializamos el proyecto con el comando php artisan serve (por defecto se ejecutara en el localhost, puesto 8000)</li>
    </ul>
</p>
<br>
<br>
<br>

<h3>Archivo .ENV</h3>

<p>

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:t1b+IBuPeEFmhIIH40BXpmA3OzKsIJ6kw64cyUJSQzY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mydb
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

API_ENDPOINT='https://api.apilayer.com/fixer/convert'
API_KEY=(Aquí pegamos el api_kay generado por fixer.io) 
</p>

<br>
<p>Preguntarme al interno por el api_key</p>
<br>
<br>
<br>

<h1>REQUERIMIENTOS</h1>
<br>
<ul>
    <li>"php": "^8.0.2"</li>
    <li>"laravel/framework": "^9.19"</li>
</ul>
<br>

<h1>USUARIO DE PRUEBAS</h1>
<br>
<ul>
    <li>Email: jean.seiya@hotmail.com</li>
    <li>Contraseña: password</li>
</ul>

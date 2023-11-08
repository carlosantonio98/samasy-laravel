
# Samasy

El sistema propuesto es una solución para llevar un control efectivo de las ventas de productos de un negocio de aguas frescas. Cada producto registrado recibe un código QR único que, al ser escaneado al venderse, actualiza el inventario y registra la venta en la base de datos. Esto permite analizar las ventas, identificar los productos más vendidos y tomar decisiones informadas para mejorar la gestión y rentabilidad del negocio. 

Para poder escanear los códigos QR del sistema, es requisito utilizar una aplicación especial que ha sido diseñada específicamente para este propósito. Esta aplicación ha sido desarrollada para garantizar la adecuada lectura y decodificación de los códigos QR utilizados en nuestro sistema, asegurando así la eficiencia y precisión en la obtención de la información asociada a dichos códigos. La aplicación la podrás encontrar [aquí](https://github.com/carlosantonio98/samasy-app-flutter).

## Pre-requisitos 📋

Para la correcta ejecución de este proyecto, necesitas tener las siguientes tecnologías instaladas en tu ordenador.
* Php ^8.0.2
* Composer 2.4.1
* Laravel ^9.19
* MariaDB 10.4.24
* Npm 8.19.1
* Yarn 1.22.19

## Instalación 🔧

1. Clona este proyecto.
```bash
git clone https://github.com/carlosantonio98/samasy-laravel.git
```

2. Instala las dependencias de php con composer.
```bash
composer install
```

3. Instala las dependencias de javascript con yarn.
```bash
yarn install
```

4. Crea una nueva base de datos con tu gestor de base de datos preferido.

5. Crea el archivo .env y configura las variables de entorno correspondientes.
```json
APP_NAME="Samasy"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3308
DB_DATABASE=your_new_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

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
```

6. Genera una APP_KEY.
```bash
php artisan key:generate
```

7. Ejecuta las migraciones con los seeders.
```bash
php artisan migrate:fresh --seed
```

8. Crea el enlace de la carpeta storage/app/public.
```bash
php artisan storage:link
```

9. Ejecuta los estilos con yarn.
```bash
yarn dev
```

10. Ejecuta el proyecto laravel.
```bash
php artisan serve
```

# Usuarios de prueba🗝️

1. Administrador
    - Correo: admin@admin.com
    - Contraseña: Manzana13.
2. Vendedor 1
    - Correo: sellerone@sellerone.com
    - Contraseña: Manzana13.
3. Vendedor 2
    - Correo: sellertwo@sellertwo.com
    - Contraseña: Manzana13.

## Construido con 🛠️

- [Laravel 9.19](https://laravel.com/docs/9.x)
- [Composer 2.4.1](https://getcomposer.org/)
- [Tailwind 3.1.0](https://tailwindcss.com/)
- [MariaDB 10.4.24](https://mariadb.com/kb/en/mariadb-10424-release-notes/)
- [Npm 8.19.1](https://www.npmjs.com/package/npm/v/8.19.1)
- [Yarn 1.22.19](https://classic.yarnpkg.com/lang/en/docs/install/#windows-stable)


## Preview 📸

- Inicio de sesión

    ![App Screenshot](https://i.imgur.com/BYFTIaq.jpg)

- Pagina principal
    
    ![App Screenshot](https://i.imgur.com/JptbEqf.jpg)

- Catálogo de tipos
    
    ![App Screenshot](https://i.imgur.com/aRu8M3C.jpg)

- Catálogo de sabores
    
    ![App Screenshot](https://i.imgur.com/Fi5tfn5.jpg)

- Catálogo de productos
    
    ![App Screenshot](https://i.imgur.com/wEoLk38.jpg)

- Catálogo de gastos
    
    ![App Screenshot](https://i.imgur.com/H0whY1e.jpg)

- Catálogo de ventas

    ![App Screenshot](https://i.imgur.com/w3IkNqv.jpg)

- Catálogo de existencias

    ![App Screenshot](https://i.imgur.com/pVoxmAO.jpg)

- Catálogo de usuarios

    ![App Screenshot](https://i.imgur.com/QbLj6AJ.jpg)

- Catálogo de roles

    ![App Screenshot](https://i.imgur.com/gml8hCq.jpg)

- Catálogo de permisos

    ![App Screenshot](https://i.imgur.com/awAWtWT.jpg)

- Pagina de perfil

    ![App Screenshot](https://i.imgur.com/K8iBskT.jpg)

- Pagina principal del vendedor

    ![App Screenshot](https://i.imgur.com/ctledK9.jpg)

## Autor 🖋️

- [@carlosantonio98](https://github.com/carlosantonio98)
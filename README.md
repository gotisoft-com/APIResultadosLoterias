# Loteriaapi

Este es un proyecto en Laravel 10 que implementa una API para gestionar información relacionada con loterías.

## Requisitos

- PHP 8.3
- Composer
- [Laravel](https://laravel.com/) 10

## Configuración

1. Clona este repositorio:

   ```bash
   git clone https://github.com/gotisoft-com/loteriaapi.git

2. Instala las dependencias:

   ```bash
   composer install
   
3. Crea el archivo de configuración de entorno:

   ```bash
   cp .env.example .env
   
4. Genera la clave de la aplicación:

   ```bash
    php artisan key:generate
   
5. Crea la base de datos y configura las credenciales de acceso en el archivo `.env`:
6. Ejecuta las migraciones y los seeders:

   ```bash
   php artisan migrate
   
7. Inicia el servidor de desarrollo:

   ```bash
    php artisan serve
   
8. Inicia los procesos de cola y el planificador de tareas:

   ```bash
    php artisan queue:work
    php artisan schedule:work
   

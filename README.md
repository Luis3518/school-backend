# School Backend

Este es el backend del sistema de gestión escolar. A continuación, se detallan los pasos para la instalación y configuración.

## Requisitos

- **PHP 7.4 o superior**
- **Composer**
- **Node.js**
- **NPM**
- **Base de datos (MySQL, PostgreSQL, etc.)**

## Instrucciones de Instalación

Sigue los pasos a continuación para configurar y ejecutar el proyecto.

### 1. Instalar Dependencias de PHP

Primero, asegúrate de tener `composer` instalado. Si no lo tienes, puedes instalarlo con el siguiente comando:

```bash
sudo apt install composer
```
### 2. Configurar la Base de Datos

Antes de ejecutar las migraciones, asegúrate de tener configurado tu archivo .env con la información correcta de la base de datos.

```bash
php artisan migrate
```

Este comando ejecutará las migraciones y creará las tablas necesarias en la base de datos.
### 3. Poblar la Base de Datos

Para agregar datos de prueba, puedes ejecutar el comando de seeds:

```bash
php artisan db:seed
```

### 4. Instalar Dependencias de Node.js

Instala las dependencias del frontend utilizando npm:


```bash
npm install
```

### 5. Compilar los Archivos Frontend

Construye los archivos del frontend:

```bash
npm run build
```
Si más adelante hay problemas con los estilos, volver a ejecutar este comando para recompilar.

### 6. Iniciar el Servidor

Inicia el servidor de desarrollo de Laravel con el siguiente comando:

```bash
php artisan serve
```
Esto iniciará el servidor en `http://127.0.0.1:8000`

### Problemas de Estilos

Si encuentras problemas con los estilos del frontend, puedes recompilar los assets usando:
```bash
npm run build
```

-----------------


### Acceso al Sistema

Puedes acceder al sistema utilizando las siguientes credenciales:

    Correo electrónico: test@test.com
    Contraseña: 123456

También tienes la opción de registrar un nuevo usuario si lo prefieres.

-----------------

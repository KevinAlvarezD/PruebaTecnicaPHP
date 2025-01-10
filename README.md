
---
# Gasto Personal - Proyecto de Gestión de Gastos

## Descripción

Este proyecto fue desarrollado por **Kevin Álvarez Díaz**. Se trata de una aplicación web para la gestión de gastos personales. Los usuarios pueden registrar, editar, eliminar y consultar sus gastos categorizados por descripción, monto, fecha y categoría. Esta aplicación utiliza **PHP**, **Laravel**, y **MySQL** para la gestión de datos y autenticación.

## Tecnologías Utilizadas

- **PHP**: Lenguaje de programación del backend.
- **Laravel**: Framework PHP utilizado para construir la aplicación.
- **MySQL**: Sistema de gestión de bases de datos relacional utilizado para almacenar los datos del proyecto.
- **Composer**: Herramienta de gestión de dependencias para PHP.
- **Tailwind CSS**: Framework de diseño para crear interfaces de usuario modernas.

## Requisitos

Antes de instalar y ejecutar el proyecto, asegúrate de tener las siguientes tecnologías instaladas en tu máquina:

- **PHP 8.0 o superior**.
- **Composer**: Para gestionar las dependencias del proyecto.
- **MySQL**: Base de datos donde se almacenarán los registros de gastos.
- **Node.js y NPM**: Para compilar los recursos frontend.

## Instalación

Sigue estos pasos para clonar y ejecutar este proyecto en tu entorno local.

### 1. Clonar el repositorio

Clona el repositorio desde GitHub con el siguiente comando:

```bash
git clone https://github.com/tu-usuario/nombre-del-repositorio.git
```

### 2. Navegar al directorio del proyecto

Accede al directorio del proyecto:

```bash
cd nombre-del-repositorio
```

### 3. Instalar las dependencias de PHP

Instala las dependencias de PHP utilizando Composer:

```bash
composer install
```

### 4. Configurar el archivo `.env`

Copia el archivo `.env.example` y renómbralo a `.env`:

```bash
cp .env.example .env
```

Abre el archivo `.env` y configura las siguientes variables con tus datos:

- **DB_CONNECTION**: Debe estar configurado como `mysql`.
- **DB_HOST**: Dirección de tu servidor MySQL (local o remoto).
- **DB_PORT**: Generalmente es `3306` para MySQL.
- **DB_DATABASE**: Nombre de la base de datos que utilizarás.
- **DB_USERNAME**: Tu nombre de usuario de MySQL.
- **DB_PASSWORD**: Tu contraseña de MySQL.

Ejemplo:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gastos_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generar la clave de la aplicación

Genera una nueva clave de la aplicación ejecutando el siguiente comando:

```bash
php artisan key:generate
```

### 6. Crear la base de datos

Asegúrate de que MySQL esté corriendo en tu máquina y crea la base de datos configurada en el archivo `.env`. Puedes hacerlo a través de la terminal de MySQL o mediante un cliente como **phpMyAdmin**.

Si ya tienes la base de datos creada, asegúrate de que esté vacía antes de correr las migraciones.

### 7. Ejecutar las migraciones

Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

```bash
php artisan migrate
```

### 8. Cargar datos de ejemplo (Seeders)

Si deseas cargar datos de ejemplo en la base de datos, puedes ejecutar los seeders. Este proyecto incluye un seeder para crear usuarios de ejemplo:

```bash
php artisan db:seed
```

### 9. Ejecutar el servidor de desarrollo

Ahora, puedes ejecutar el servidor de desarrollo integrado de Laravel con el siguiente comando:

```bash
php artisan serve
```

Esto iniciará el servidor en `http://127.0.0.1:8000`.

### 10. Acceder a la aplicación

Abre tu navegador y visita la URL proporcionada: [http://127.0.0.1:8000](http://127.0.0.1:8000).

### 11. Autenticación

La aplicación utiliza **Laravel Jetstream** para la gestión de autenticación de usuarios. Puedes registrar un nuevo usuario desde la página de inicio de sesión.

### 12. Realizar operaciones

Una vez autenticado, puedes gestionar tus gastos personales. Las operaciones disponibles son:

- **Agregar un gasto**: Registra un nuevo gasto con la descripción, monto, categoría y fecha.
- **Editar un gasto**: Modifica los detalles de un gasto existente.
- **Eliminar un gasto**: Borra un gasto previamente registrado.
- **Consultar los gastos**: Visualiza todos los gastos registrados, ordenados por fecha.

---

## Contribuciones

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Realiza un fork de este repositorio.
2. Crea una nueva rama (`git checkout -b feature-nueva-funcionalidad`).
3. Realiza tus cambios y realiza commits (`git commit -am 'Agregada nueva funcionalidad'`).
4. Envía un pull request.

---

## Licencia

Este proyecto está bajo la Licencia MIT - consulta el archivo [LICENSE](LICENSE) para más detalles.

---

Si tienes alguna duda o sugerencia, no dudes en contactarme.

---

# Proyecto de Inventario y Asignación de Equipos y Periféricos

Este proyecto está centrado en la gestión de inventario, asignación de equipos y periféricos. Permite la subida y exportación de datos en formato Excel y ofrece funcionalidades para consultar compras, asignar diademas y periféricos a usuarios, así como registrar nuevas compras.

## Características principales

- **Gestión de Inventario:** Control detallado de equipos y periféricos disponibles.
- **Subida y Exportación de Datos:** Funcionalidad para importar y exportar datos en formato Excel.
- **Consulta de Compras:** Acceso rápido a registros de compras realizadas.
- **Asignación de Equipos:** Herramientas para asignar diademas y periféricos a usuarios.
- **Registro de Compras:** Funcionalidad para añadir nuevas compras al sistema.

## Tecnologías utilizadas

- **Laravel:** Framework PHP utilizado para el desarrollo del backend.
- **PHP:** Lenguaje de programación principal.
- **MySQL:** Sistema de gestión de bases de datos.
- **Excel:** Para la manipulación de archivos de hojas de cálculo.

## Requerimientos del sistema

- PHP >= 7.4 o PHP >= 8.0
- Laravel Framework >= 8.0
- MySQL
- Composer

## Instalación y configuración

1. **Clonar el repositorio:**

git clone [URL_del_repositorio]

markdown
Copy code

2. **Navegar al directorio del proyecto:**

cd ruta/del/proyecto

markdown
Copy code

3. **Instalar dependencias:**

composer install

markdown
Copy code

4. **Configurar archivo `.env`:**

cp .env.example .env
php artisan key:generate

markdown
Copy code

5. **Migraciones y datos iniciales:**

php artisan migrate

scss
Copy code

(Opcional) Si tienes semillas o datos iniciales:

php artisan db:seed

markdown
Copy code

6. **Ejecutar el servidor de desarrollo:**

php artisan serve

shell
Copy code

## Uso

- Accede a la aplicación a través de tu navegador web.
- Utiliza las diferentes funcionalidades disponibles para gestionar el inventario, realizar consultas, asignar equipos y registrar compras.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas contribuir al proyecto, por favor crea una nueva rama y envía un pull request con tus cambios.

## Licencia

Este proyecto está bajo la licencia [MIT](LICENSE).
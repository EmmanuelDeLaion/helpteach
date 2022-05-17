 

## Ejecutar el proyecto

- npm install (Instalar node)
- composer install (Instalar composer en la pc)

- Crear una copia de .env.example y renombrarla a .env
- Ingresar las credenciales en el archivo .env
- Crear la base de datos

- Crear el enlace para la carpeta de storage ejecutar: php artisan storage:link
- Crear las migraciones y llenar con datos dummy ejecutar: php artisan migrate:fresh --seed

- (Si da error) -> Comentar el observador LessonObserver y volver a ejecutar 
ejecutar php artisan migrate:fresh --seed

- Por utlimo para ejecutar el proyecto: php artisan serve

# Proyecto-Prueba
Aplicación, sistema de prueba

Documentación para correr Web App (Registro de citas médicas)

Instrucciones de instalación en local

El proyecto fue desarrollado en un framework en php. A continuación indico los pasos para correr el sistema de forma local.

1). Descargar los archivos del proyecto del repositorio de github. Incluida la base de datos.

2). Si está usando el servidor local Xampp(recomendado), copiar los archivos del proyecto en la carpeta htdocs, (www en caso de Wampp) . Crear la carpeta “lugoin” (o el nombre de su preferencia), dentro de ésta copiar los archivos del proyecto.

3). Crear la base de datos prueba en PhpMyAdmin e importar el sql(base de datos) que fue descargado.

4).Configurar las credenciales de Mysql, en el archivo app/config/configurar.php

5).Para correr el proyecto de forma local:  escribir en el navegador la url http://localhost/carpeta del proyecto.

Instrucciones de uso del sistema

1). La primera pantalla le permite llenar un formulario y guardar los datos. 

Cuando hace click en “Guardar” se guardan los datos en la base de datos. Cuando hace click en “Ver histórico médico” se muestra un listado de datos de pacientes con historias médicas.

2). Cuando se hace click en “Ver Detalles” se muestra un mensaje que se generó al guardar los datos.

3). Cuando se hace click en “Eliminar”, se borra completamente el registro indicado. 

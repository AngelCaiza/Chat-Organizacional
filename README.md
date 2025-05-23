# Proyecto de Chat Organizacional

Este proyecto es un sistema de chat organizacional diseñado para facilitar la comunicación interna entre los miembros de una empresa o equipo. Permite intercambiar mensajes en tiempo real y gestionar usuarios con roles específicos, tales como jefes, secretarios y bodegueros, para mantener una comunicación eficiente y centralizada que mejora la colaboración y productividad.

## Comenzando 🚀

Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.



### Pre-requisitos 📋

Qué cosas necesitas para instalar el software y cómo instalarlas:

- PHP 7 o superior  
- Servidor web Apache (XAMPP, WAMP, MAMP, etc.)  
- MySQL o MariaDB  
- Navegador web moderno

### Instalación 🔧

Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo en funcionamiento:

1. Clona el repositorio:

    git clone 

2. Configura la base de datos MySQL:

    CREATE DATABASE chat_organizacional;

3. Importa la estructura y datos iniciales:

    mysql -u tu_usuario -p chat_organizacional < database/schema.sql

4. Configura las variables de entorno o el archivo de configuración:

- Edita el archivo `config.php` con tus datos de conexión a la base de datos (host, usuario, contraseña, nombre de la base).

5. Copia todos los archivos del proyecto al directorio raíz del servidor web (ejemplo: `htdocs` en XAMPP).

6. Inicia el servidor web y abre en el navegador:

    http://localhost/Chat-Organizacional/

## Uso básico 🖥️

- Registra usuarios asignándoles roles (jefes, secretarios, bodegueros).  
- Inicia sesión con tus credenciales.  
- Envía mensajes en tiempo real a otros usuarios o en salas de chat por departamento.  
- Administra y crea nuevas salas de conversación según necesidad.

## Ejecutando las pruebas ⚙️

Actualmente el proyecto no incluye pruebas automatizadas, pero para probar manualmente:

- Registra varios usuarios con diferentes roles.  
- Envía mensajes entre usuarios y verifica la recepción en tiempo real.  
- Verifica que las restricciones por rol funcionen correctamente.  

## Construido con 🛠️

Estas con las herramientas que se utilizaron en este  proyecto

- HTML5  
- CSS3  
- JavaScript  
- PHP  
- MySQL  


## Autores ✒️

Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios:

-Angel Caiza



## Licencia 📄

Este proyecto está bajo la Licencia MIT. Esto significa que eres libre de usar, copiar, modificar y distribuir este software para cualquier propósito, incluso comercialmente, siempre que conserves el aviso de copyright y la licencia en todas las copias o partes sustanciales del software.

Para más detalles, revisa el archivo [LICENSE.md](LICENSE.md).

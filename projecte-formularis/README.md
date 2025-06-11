# Proyecto Formularis

Este proyecto consiste en un sistema de formularios web que permite a los usuarios introducir y procesar datos personales y realizar análisis de texto. El proyecto está compuesto por dos ejercicios, cada uno con su propio formulario y lógica de procesamiento.

## Estructura del Proyecto

El proyecto contiene los siguientes archivos:

- **exercici01.html**: 
  - Este archivo contiene un formulario que recoge datos personales de una persona. Incluye campos para:
    - Nombre
    - Apellidos
    - Género
    - Correo electrónico
    - Edad
    - Ciudad
    - Una lista de aficiones (checkbox)
    - Un espacio para motivaciones personales (textarea)
  
- **exercici01.php**: 
  - Este archivo procesa los datos enviados desde `exercici01.html`. Recoge todas las entradas del formulario y las agrupa en una sola variable, mostrando los datos en pantalla.

- **exercici02.html**: 
  - Este archivo contiene un formulario que recoge un texto (textarea) y una palabra (text), así como un botón de envío. Permite al usuario introducir un texto y una palabra a buscar.

- **exercici02.php**: 
  - Este archivo procesa los datos enviados desde `exercici02.html`. Calcula la longitud del texto introducido y cuenta cuántas veces aparece la palabra en el texto. Incluye validación en PHP para asegurarse de que los campos del formulario están completos y muestra un mensaje de error si es necesario.

## Instrucciones de Uso

1. Abre `exercici01.html` en un navegador web para acceder al primer formulario.
2. Completa todos los campos requeridos y envía el formulario. Los datos se procesarán y se mostrarán en `exercici01.php`.
3. Para el segundo ejercicio, abre `exercici02.html` y completa el formulario con un texto y una palabra.
4. Al enviar el formulario, `exercici02.php` mostrará la longitud del texto y el número de veces que aparece la palabra.

## Requisitos

Asegúrate de tener un servidor web que soporte PHP para ejecutar los archivos `.php` correctamente. Puedes utilizar servidores locales como XAMPP, WAMP o MAMP para pruebas en tu máquina local.
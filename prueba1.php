<?php
// aquí irá todo el contenido en lenguaje PHP
echo 'Hola Mundo </br>';
print ('Hola capullo </br>');
print_r('Hola de nuevo </br>');
/// declaracion de variables

$nombre = 'Fernando';
$edad = 38;
$genero= true;
$precio = 1.75 ;
print_r("Su nombre es: {$nombre} </br>");
print_r("Su nombre es: .$nombre </br>");

if( $precio < 25){
    print_r('payaso');
}else{
    print_r('Muy payaso');
}

$apellidos1 = null;
$apellidos2 = 0;
$apellidos3 = false;
$apellidos4 = '';

if(!$apellidos1){
    print_r('ha entrado </br>');
}
if(!$apellidos2){
    print_r('ha entrado </br> ');
}
if(!$apellidos3){
    print_r('ha entrado </br>');
}
if(!$apellidos4){
    print_r('ha entrado </br>');
}
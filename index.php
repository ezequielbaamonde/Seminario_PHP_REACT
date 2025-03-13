<!DOCTYPE html>
<html lang="en-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros pasos</title>
</head>
<body>
    <h1><?= "Hola mundo"; ?></h1> <!-- Manera de incrustar etiqueta php en html-->
</body>
</html>

<?php
    $nombre = "Juan"; //Esto es una variable de STRING
    const URL = ""; //Esto es una constante, no lleva el signo peso
    define ("CONSTANTE", "VALOR"); //Esto es una constante definida por define (nombre, valor)


    $vec (1, 2, 3, 4); //Esto es un vector del 0 al 3
    $vec2 = ["Hola", "Eze"]; //Esto es un vector, también
    $vec3 = array (1 => "Ezequiel", "Bar" => "El tano"); //Esto es un vector asociativo, con claves y valores
    $vec[] = 5; //Agrego un elemento sin indice, se crea solo en el indice 4
    $vec[0] = 6; //Modifico un elemento con indice 0
    
    unset ($vec); //Elimino el vector
    print_r($vec2); //Imprimo el arreglo

    $vec3 = array_values($vec3); //Convierto el arreglo asociativo en uno normal, re-indexado

    $valor = $vec3; //Asigno el valor de un arreglo a una variable
    $valor [1] = "Juan"; //Cambio el arreglo de valor, no vec3
    $referencia = &$vec3; //Asigno la referencia de un arreglo a una variable
    $referencia [1] = "Pepe"; //Cambio el arreglo de REFEREMCOA, vec3 también cambia

    //matrices
    $matriz = array (1 => array (1, 2, 3), 2 => array (4, 5, 6), 3 => array (7, 8, 9));
    #Donde la primera clave es la fila y la segunda la columna
    echo $matriz[1][1]; //Imprimo el valor de la fila 1, columna 1

    $nada = NULL; //Variable nula

    $a = "Hola";
    $$a = "Mundo"; //Variable de variable, se crea una variable con el valor de la variable $a ($Hola = "Mundo")
    echo "$a ${$a}"; //Imprimo el valor de la variable $a y el valor de la variable de variable
    echo "$a $Hola"; //Imprimo el valor de la variable $a y el valor de la variable de variable

    include "archivo.php"; //Incluyo un archivo php
    require "archivo.php"; //Incluyo un archivo php, si no existe, no se ejecuta el resto del código
    include_once "archivo.php"; //Incluyo un archivo php, si ya fue incluido, no lo vuelve a incluir
    require_once "archivo.php"; //Incluyo un archivo php, si ya fue incluido, no lo vuelve a incluir, si no existe, no se ejecuta el resto del código

    function hola($nombre){
        echo "Hola $nombre";
    } //Imprimo un mensaje con el nombre que se le pase por parámetro

    function hola2(&$nombre){ //recibe parametro por referencia
        $nombre = "Juan"; //Cambio valor del parametro recibido
        echo "Hola $nombre";
    } //Imprimo un mensaje con el nombre que se le pase por parámetro
    hola ("Ezequiel");
    $name = "Fabri";
    hola2 ($name);
    echo $name; //Imprimo el valor de la variable $name //Juan

    foreach ($vec2 as $valor){ //Recorro el arreglo vec2
        echo $valor;
    }

    foreach ($vec3 as $key => $valor){ //Recorro el arreglo vec3 e imprimo su clave
        echo "$key => $valor";
    }
?>
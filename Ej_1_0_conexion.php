<?php
    //Variables para crear la conexión.
    $host = "localhost"; 
    $user = "root"; //Usuario (el que le indiquemos).
    $pwd = "2asir"; //Contraseña (la que le indiquemos).

    $enlace = mysql_connect($host, $user, $pwd); //Creo la conexión a la BD.
    $nombreBD = "BD_T4_GJMM"; //Asigno una variable con el nombre, así solo tengo que cambiarlo aquí.

    if (!$enlace){
    die("No se pudo realizar la conexión." mysql_error()); //Se produjo un error y "mata" al script.
    )else {
        mysql_select_db ($enlace, $nombreBD); "Se ha realizado la conexión" //Realiza la conexión.
    }
    
?>
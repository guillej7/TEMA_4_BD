<?php

    include ('Ej_1_0_conexion.php') //Enlazamos el php anterior con este.
    
    $consulta = "CREATE DATABASE $nombreBD"; //Creamos la BD, obteniendo el nombre de la variable.
    mysqli_query($enlace, $consulta); //Creamos la BD.

    mysqli_close($enlace); //Cerramos la conexión.
?>
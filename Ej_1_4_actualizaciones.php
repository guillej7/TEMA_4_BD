<?php
include ('.\Ej_1_0_conexion.php') //Enlazamos el php anterior con este.
    $actualizacion1 = "UPDATE usuarios set Edad=44 where Edad=21;"
    $actualizacion2 = "UPDATE cursos set nombre='Redes' where nombre='ASIR';"
    $actualizacion3 = "UPDATE aula set Capacidad=4 where Capacidad=5;"
    $actualizacion4 = "UPDATE edificio set nombre='Info' where descripcion='Reforma';"

    mysqli_query($actualizacion1);
    mysqli_query($actualizacion2);
    mysqli_query($actualizacion3);
    mysqli_query($actualizacion4);

    mysqli_close($enlace);

?>
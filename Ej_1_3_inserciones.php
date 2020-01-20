<?php
include ('.\Ej_1_0_conexion.php') //Enlazamos el php anterior con este.
    $insercion1 = "INSERT INTO usuario (id, nombre, Apellidos, Edad, Direccion)
    VALUES (1, 'Guillermo', 'Munoz', 21, 'C/Picasso');"

    $insercion2 = "INSERT INTO cursos (codigo_curso, nombre, Descripcion, Horas_duracion)
    VALUES (5, 'ASIR', 'Curso de Administracion Redes', 150);"
    
    $insercion3 = "INSERT INTO aula (nombre, Capacidad, Planta, Descripción)
    VALUES ('aso',50, 1, 'buen estado';"
    
    $insercion4 = "INSERT INTO edificio (nombre, Descripción)
    VALUES ('Informatica', 'perfecto';"

    mysqli_query($insercion1);
    mysqli_query($insercion2);
    mysqli_query($insercion3);
    mysqli_query($insercion4);

    mysqli_close($enlace);

?>
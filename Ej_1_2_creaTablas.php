<?php
include ('.\Ej_1_0_conexion.php') //Enlazamos el php anterior con este.
    //Creamos la tabla almacenando el código SQL (create table) en una variable.
    $consulta1 = "CREATE TABLE usuario (
        id            int Primary key not null,
        nombre        varchar(30) not null, 
        Apellidos     varchar(30) not null,
        Edad          int not null,
        Direccion     varchar(30) not null  
    );"

    $consulta2 = "CREATE TABLE cursos (
        codigo_curso  int Primary key not null,
        nombre        varchar(30) not null, 
        Descripcion    varchar(30) not null,
        Horas_duracion  int not null
    );"

    $consulta3 = "CREATE TABLE aula (
        Nombre  varchar(30) Primary key not null,
        Capacidad        int not null, 
        Planta    int not null,
        Descripción  varchar(50) not null
    );"
    
    $consulta4 = "CREATE TABLE edificio (
        Nombre  varchar(30) Primary key not null,
        Descripción  varchar(50) not null
    );"

    mysqli_query($consulta1);
    mysqli_query($consulta2);
    mysqli_query($consulta3);
    mysqli_query($consulta4);

    mysqli_close($enlace);
?>
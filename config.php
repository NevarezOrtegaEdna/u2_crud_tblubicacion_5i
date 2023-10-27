<?php

$server = "localhost";
$user = "root";
$password = "";
$nombre_bd = "bdubicacion";

$bd = mysqli_connect($server, $user, $password, $nombre_bd);

if (!$bd)
    die("No se pudo conectar a la base de datos: " . mysqli_connect_error());

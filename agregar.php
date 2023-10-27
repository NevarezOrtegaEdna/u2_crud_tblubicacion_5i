<?php
include("./config.php");

// Compruebe si se ha hecho click en el botón de registro o no
if (isset($_POST['update'])) {
    // recuperar datos del formulario
    $id = $_POST['edit_id'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $codigoP = $_POST['codigoP'];
    $zonaH = $_POST['zonaH'];
    $colonia = $_POST['colonia'];
    $nomCalle = $_POST['nomCalle'];
    $numCalle = $_POST['numCalle'];

    // consulta
    $sql = "INSERT INTO ubicacion(estado, ciudad, codigoP, zonaH, colonia, nomCalle, numCalle)
    VALUES('$estado', '$ciudad', '$codigoP', '$zonaH', '$colonia', '$nomCalle', '$numCalle')";
    $query = mysqli_query($bd, $sql);

    // Comprueba si la consulta se guardó correctamente
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Acceso prohibido...");

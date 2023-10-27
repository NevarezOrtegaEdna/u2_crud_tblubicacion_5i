<?php
include("./config.php");

// Comprueba si se ha hecho click en el botón de registro o no
if (isset($_POST['edit_data'])) {
    // recupera datos del formulario
    $id = $_POST['edit_id'];
    $estado = $_POST['edit_estado'];
    $ciudad = $_POST['edit_ciudad'];
    $codigoP = $_POST['edit_codigoP'];
    $zonaH = $_POST['edit_zonaH'];
    $colonia = $_POST['edit_colonia'];
    $nomCalle = $_POST['edit_nomCalle'];
    $numCalle = $_POST['edit_numCalle'];


    // consulta
    $sql = "UPDATE ubicacion SET estado='$estado', ciudad='$ciudad', codigoP='$codigoP', zonaH='$zonaH', colonia='$colonia', nomCalle='$nomCalle', numCalle='$numCalle' WHERE id = '$id'";
    $query = mysqli_query($bd, $sql);

    // Comprueba si la consulta se guardó correctamente
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Acceso prohibido...");

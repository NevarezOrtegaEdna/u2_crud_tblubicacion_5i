<?php
include("./config.php");

if (isset($_POST['deletedata'])) {
    // tomar la identificación de la cadena de consulta
    $id = $_POST['delete_id'];

    // eliminar consulta
    $sql = "DELETE FROM ubicacion WHERE id = '$id'";
    $query = mysqli_query($bd, $sql);

    // Se eliminó correctamente la consulta?
    if ($query) {
        header('Location: ./index.php?hapus=sukses');
    } else
        die('Location: ./index.php?hapus=gagal');
} else
    die("Acceso prohibido...");

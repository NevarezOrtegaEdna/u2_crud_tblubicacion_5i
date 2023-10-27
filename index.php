<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Data ubicacion diagregarkan</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Go Data</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- agregar formulario de ubicacion -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- agregar datos -->
            <div class="card-body">
                <h3 class="card-title">Agregar datos de Ubicacion</h3>

                <!-- mostrar mensaje de éxito agregado -->
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Éxito!</strong> ¡Datos agregados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Los datos no se pudieron agregar!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="agregar.php" method="POST">

                <div class="col-md-4">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" name="estado" aria-label="Default select example">
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="BajaCalifonia">Baja California</option>
                            <option value="BajaCalifoniaSur">Baja Califonia Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="CDMX">CDMX</option>
                            <option value="Coahuila">Coahuila</option>
                            <option value="Colima">Colima</option>
                            <option value="Durando">Durando</option>
                            <option value="EstadoDeMexico">Estado de Mexico</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacan">Michoacan</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="NuevoLeon">Nuevo Leon</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Queretaro">Queretaro</option>
                            <option value="QuintanaRoo">Quintana Roo</option>
                            <option value="SanLuisPotosi">San Luis Potosi</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatan">Yucatan</option>
                            <option value="Zacatecas">Zacatecas</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" placeholder="Juárez" required>
                    </div>
                    <div class="col-md-4">
                        <label for="codigoP" class="form-label">Codigo Postal</label>
                        <input type="text" name="codigoP" class="form-control" placeholder="32730" required>
                    </div>
                    <div class="col-md-4">
                        <label for="zonaH" class="form-label">Zona Horaria</label>
                        <input type="time" name="zonaH" class="form-control" placeholder="12:00" required>
                    </div>


                    <div class="col-md-4">
                        <label for="colonia" class="form-label">Colonia</label>
                        <input type="text" name="colonia" class="form-control" placeholder="Progresista" required>
                    </div>
                    <div class="col-md-4">
                        <label for="nomCalle" class="form-label">Nombre de la Calle</label>
                        <input type="text" name="nomCalle" class="form-control" placeholder="Benjamín Franklin" required>
                    </div> 
                    <div class="col-md-6">
                        <label for="numCalle" class="form-label">Numero de la Calle</label>
                        <input type="text" name="numCalle" class="form-control" placeholder="4185" required>
                    </div> 


                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="update"><i class="fa fa-plus"></i><span class="ms-2">Agregar</span></button>
                    </div>
                </form>
            </div>
        </div>


        <!-- título de la tabla -->
        <h5 class="mb-3">Lista de ubicacion</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Mostrar entradas</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Cari Sesuatu..." aria-label="cari" aria-describebdy="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- mostrar mensaje de eliminación exitosa -->
        <?php if (isset($_GET['hapus'])) : ?>
            <?php
            if ($_GET['hapus'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exito!</strong> Datos eliminados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> No se pudieron eliminar los datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- mostrar un mensaje de edición exitosa -->
        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exito!</strong> ¡Datos actualizados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> ¡Los datos no se pudieron actualizar!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabla -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>id</th>";
            echo "<th scope='col'>Estado</th>";
            echo "<th scope='col'>Ciudad</th>";
            echo "<th scope='col'>Codigo Postal</th>";
            echo "<th scope='col'>Zona Horaria</th>";
            echo "<th scope='col'>Colonia</th>";
            echo "<th scope='col'>Nombre de la Calle</th>";
            echo "<th scope='col'>Numero de la Calle</th>";
            echo "<th scope='col' class='text-center'>Editar</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $batas = 10;
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $pagina_awal = ($pagina > 1) ? ($pagina * $batas) - $batas : 0;

            $previous = $pagina - 1;
            $next = $pagina + 1;

            $data = mysqli_query($bd, "SELECT * FROM ubicacion");
            $jumlah_data = mysqli_num_rows($data);
            $total_pagina = ceil($jumlah_data / $batas);

            $data_mhs = mysqli_query($bd, "SELECT * FROM ubicacion LIMIT $pagina_awal, $batas");
            $no = $pagina_awal + 1;

            // $sql = "SELECT * FROM ubicacion";
            // $query = mysqli_query($bd, $sql);




            while ($ubicacion = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $ubicacion['id'] . "</td>";
                echo "<td class='text-center'>" . $no++ . "</td>";
                echo "<td>" . $ubicacion['estado'] . "</td>";
                echo "<td>" . $ubicacion['ciudad'] . "</td>";
                echo "<td>" . $ubicacion['codigoP'] . "</td>";
                echo "<td>" . $ubicacion['zonaH'] . "</td>";
                echo "<td>" . $ubicacion['colonia'] . "</td>";
                echo "<td>" . $ubicacion['nomCalle'] . "</td>";
                echo "<td>" . $ubicacion['numCalle'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // boton borrar
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($jumlah_data == 0) {
                echo "<p class='text-center'>No hay datos disponibles en esta tabla.</p>";
            } else {
                echo "<p>Total $jumlah_data entri</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina > 1) ? "href='?pagina=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_pagina; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina < $total_pagina) ? "href='?pagina=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Edición modal-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labellebdy='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar datos de ubicacion</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM ubicacion";
                    $query = mysqli_query($bd, $sql);
                    $ubicacion = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_id' id='edit_id'>


                            <div class="col-md-4">
                        <label for="edit_estado" class="form-label">Estado</label>
                        <select class="form-select" name="edit_estado" id= "edit_estado" aria-label="Default select example">
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="BajaCalifonia">Baja California</option>
                            <option value="BajaCalifoniaSur">Baja Califonia Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="CDMX">CDMX</option>
                            <option value="Coahuila">Coahuila</option>
                            <option value="Colima">Colima</option>
                            <option value="Durando">Durando</option>
                            <option value="EstadoDeMexico">Estado de Mexico</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacan">Michoacan</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="NuevoLeon">Nuevo Leon</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Queretaro">Queretaro</option>
                            <option value="QuintanaRoo">Quintana Roo</option>
                            <option value="SanLuisPotosi">San Luis Potosi</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatan">Yucatan</option>
                            <option value="Zacatecas">Zacatecas</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="edit_ciudad" class="form-label">Ciudad</label>
                        <input type="text" name="edit_ciudad" id="edit_ciudad" class="form-control" placeholder="Juárez" required>
                    </div>
                    <div class="col-md-4">
                        <label for="edit_codigoP" class="form-label">Codigo Postal</label>
                        <input type="text" name="edit_codigoP" id="edit_codigoP" class="form-control" placeholder="32730" required>
                    </div>
                    <div class="col-md-4">
                        <label for="edit_zonaH" class="form-label">Zona Horaria</label>
                        <input type="time" name="edit_zonaH" id="edit_zonaH" class="form-control" placeholder="12:00" required>
                    </div>


                    <div class="col-md-4">
                        <label for="edit_colonia" class="form-label">Colonia</label>
                        <input type="text" name="edit_colonia" id="edit_colonia" class="form-control" placeholder="Progresista" required>
                    </div>
                    <div class="col-md-4">
                        <label for="edit_nomCalle" class="form-label">Nombre de la Calle</label>
                        <input type="text" name="edit_nomCalle" id="edit_nomCalle" class="form-control" placeholder="Benjamín Franklin" required>
                    </div> 
                    <div class="col-md-6">
                        <label for="edit_numCalle" class="form-label">Numero de la Calle</label>
                        <input type="text" name="edit_numCalle" id="edit_numCalle"  class="form-control" placeholder="4185" required>
                    </div> 


                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="edit_data"><i class="fa fa-plus"></i><span class="ms-2">Agregar</span></button>
                    </div>
                </form>
            </div>
        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal eliminacion-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labellebdy='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmación</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='limpiar.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>¿Estás seguro de que deseas eliminar estos datos?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-primary'>limpiar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- cerrar el contenedor -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_id').val(data[0]);
                // No lo uso porque es solo un número incremental.
                // $('#no').val(data[1]);
                $('#edit_estado').val(data[2]);
                $('#edit_ciudad').val(data[3]);
                $('#edit_codigoP').val(data[4]);
                $('#edit_zonaH').val(data[5]);
                $('#edit_colonia').val(data[6]);
                $('#edit_nomCalle').val(data[7]);
                $('#edit_numCalle').val(data[8]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>
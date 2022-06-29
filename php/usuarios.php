<?php
include 'connection.php';

$sql = "SELECT * from users";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Registros</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-5">
        <div class="mt-5 mb-3 clearfix">
            <a href="../html/registro.html" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Agregar</a>
        </div>
        <div class="row">


            <div class="col-md-0">
                <table class="table table-striped table-hover">
                    <thead class=" table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Fecha</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['username'] ?></td>

                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['created_at'] ?></td>
                                    <td><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></td>
                                    <td><a onclick=" alertDelete()" href="#" class="btn btn-danger">Eliminar</a></td>
                                    <!--  <td><a onclick=" alertDelete()" href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></td> -->
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/alert.js"></script>





</body>

</html>
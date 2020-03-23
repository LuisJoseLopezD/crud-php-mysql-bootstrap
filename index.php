<!doctype html>
<html lang="en">

<style type="text/css">
    #columna {
        overflow: auto;
        width: auto;
        height: 280px;
    }

</style>

</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Base de datos</title>
</head>

<body>

    <?php
    include 'action.php';
   ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BASE DE DATOS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                </li>
                <li class="nav-item">
                </li>
            </ul>
            <form action="search.php" method="post" class="form-inline my-2 my-lg-0">
                <input name="search" class="form-control mr-sm-2" type="number_format" placeholder="search..." aria-label="Search">
                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar" />
                <!--MODAL BUSCAR data-toggle="modal" data-target="#exampleModal3"-->
            </form>
        </div>
    </nav>

    <div id="columna">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php
      
      while ($filas = mysqli_fetch_assoc($result)){
        
      ?>

                <tr>
                    <td><?php echo $filas['id']; ?></td>
                    <td><?php echo $filas['nombre']; ?></td>
                    <td><?php echo $filas['precio']; ?></td>
                    <td>
                       <a href="editar.php?id=<?php echo $filas['id']; ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                        <a href="delete.php?id=<?php echo $filas['id']; ?>"><button type="submit" class="btn btn-danger">Eliminar</button></a>

                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Agregar -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="add.php" method="post">

                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ID</label>
                            <div class="col-sm-10">
                                <input name="id" type="number_format" class="form-control form-control-sm" id="colFormLabelSm">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                            <div class="col-sm-10">
                                <input name="nombre" type="text" class="form-control form-control-sm" id="colFormLabelSm">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Precio</label>
                            <div class="col-sm-10">
                                <input name="precio" type="text" class="form-control form-control-sm" id="colFormLabelSm">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Guardar" />
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Search -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Producto Encontrado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#exampleModal2">AGREGAR</button>
    <form action="close.php">
    <button type="submit" class="btn btn-lg btn-block btn-warning">EXIT</button>
    </form>

    <br>

    <footer style="text-align: center;">
        <p>Tienda Mérida 2020. Información: <a href="email@gmail.com">email@gmail.com</a>.</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

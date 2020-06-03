
<?php 


    $nombre = "";
    $direccion = "";
    $telefono = "";
    
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    }

    if(isset($_POST['direccion'])){
        $direccion = $_POST['direccion'];
    }

    if(isset($_POST['telefono'])){
        $telefono = $_POST['telefono'];
    }
    $alert = -1;
    if(isset($_POST['enviar'])){
        $facultad = new Facultad("", $nombre, $direccion, $telefono);
        $alert = $facultad -> guardar();
    }


?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Ingrese un Facultad
                </div>
                <div class="card-body">

                    <form action="index.php?pid=<?php echo base64_encode("Vista/Facultad/crearFacultad.php")?>" method ="POST">
                        <div class="form-group">
                            <label>Ingrese el nombre de la facultad</label>
                            <input class="form-control" name="nombre" type="text" value="<?php echo $nombre ?>">
                        </div>
                        <div class="form-group">
                            <label>Ingrese la direccion de la facultad</label>
                            <input class="form-control" name="direccion" type="text" value="<?php echo $direccion ?>">
                        </div>
                        <div class="form-group">
                            <label>Ingrese el telefono</label>
                            <input class="form-control" name="telefono" type="number" value="<?php echo $telefono ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="enviar" type="submit">
                        </div>
                    </form>
                    <?php

                        if($alert > 0){
                            ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                El registro fue almacenado correctamente.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                            
                        }else if($alert == 0){
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Hubo un problema con la base de datos, intente más tarde.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                        }

                    ?>
                </div>
            </div>

        </div>
    </div>
</div>
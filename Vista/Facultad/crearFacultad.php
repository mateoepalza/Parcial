
<?php 


    $nombre = "";
    $direccion = "";
    $telefono = "";
    echo "dsfds";
    if(isset($_POST['enviar'])){
        echo "entraa";
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $facultad = new Facultad("", $nombre, $direccion, $telefono);
        $facultad -> guardar();
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

                    <form action="index.php?pid=<?php echo "Vista/Facultad/crearFacultad.php"?>" method ="POST">
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
                </div>
            </div>

        </div>
    </div>
</div>
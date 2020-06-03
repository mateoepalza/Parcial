<?php 

    $cantidad = 5;
    $pag = 1;

    if(isset($_GET['cantidad'])){
        $cantidad = $_GET['cantidad'];
    }
    if(isset($_GET['pag'])){
        $pag = $_GET['pag'];
    }


    $facultad = new Facultad();
    $result = $facultad -> consultarTodo();
    
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                <span>Consultar Productos</span>
                    <?php $canti = array(5, 10, 15, 25, 50, 100)?>
                    <select onchange="location.href='index.php?pid=<?php echo 'Vista/Facultad/buscarFacultad.php'?>&cantidad='+this.value">
                        <?php 
                            foreach ($canti as $val) {
                                if($val == $cantidad){
                                    ?>
                                        <option value="<?php echo $val ?>" selected><?php echo $val ?></option>
                                    <?php
                                }else{
                                    ?>
                                        <option value="<?php echo $val ?>"><?php echo $val ?></option>
                                    <?php
                                }
                                
                            }
                        ?>
                    </select>
                    <span><?php echo count($result)?> Registros encontrados</span>
                </div>
                <div class="card-body">
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>dirección</th>
                                <th>Telefono</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <?php 

                                foreach ($result as $res) {
                                    ?>
                                    <tr>
                                        <td><?php echo $res -> getIdFacultad()?></td>
                                        <td><?php echo $res -> getNombre()?></td>
                                        <td><?php echo $res -> getDireccion()?></td>
                                        <td><?php echo $res -> getTelefono()?></td>
                                    </tr>
                                    <?php
                                }

                            ?>
                        </tbody>
                    </table>

                    <div class="card-footer d-flex flex-row justify-content-center align-items-center">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <?php 
                                if($pag == 1){
                                    ?>
                                        <li class="page-item disabled">
                                            <a class="page-link " href="index.php?pid=<?php echo "Presentacion/Producto/consultarProductos.php"?>&pag=<?php echo ($pag-1)?>&cantidad=<?php echo $cantidad?>" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    <?php
                                }else{
                                    ?>
                                        <li class="page-item ">
                                            <a class="page-link" href="index.php?pid=<?php echo "Vista/Facultda/buscarFacultad.php"?>&pag=<?php echo ($pag-1)?>&cantidad=<?php echo $cantidad?>" tabindex="-1" >Previous</a>
                                        </li>
                                    <?php
                                }
                            ?>
                            
                            <?php 
                                $cantFact = $facultad -> cantidadFacultades();
                                $items =  $cantFact / $cantidad ;
                                //echo $items;
                                $ite = 0;
                                $cantIte = 0;
                                if($pag != 1){
                                    $ite = $pag - 1;
                                    if($pag >= $items){
                                        $cantIte = $pag;
                                    }else{
                                        $cantIte = $pag + 1;
                                    }
                                    
                                }else{
                                    $ite = $pag;
                                    if($items <= 2){
                                        $cantIte = ceil($items);
                                    }else{
                                        $cantIte = $pag + 2;
                                    }
                                    
                                }

                                for($i = $ite; $i <= $cantIte ; $i++){
                                    if($pag == $i){
                                        ?>
                                            <li class="page-item active">
                                                <a class="page-link" href="index.php?pid=<?php echo base64_encode("Presentacion/Producto/consultarProductos.php")?>&pag=<?php echo ($i)?>&cantidad=<?php echo $cantidad?>"><?php echo ($i)?></a>
                                            </li>
                                        <?php
                                    }else{
                                        ?>
                                            <li class="page-item">
                                                <a class="page-link" href="index.php?pid=<?php echo base64_encode("Presentacion/Producto/consultarProductos.php")?>&pag=<?php echo ($i)?>&cantidad=<?php echo $cantidad?>"><?php echo ($i)?></a>
                                            </li>
                                        <?php
                                    }
                                    
                                }
                            ?>
                            <?php
                                if($pag >= $items){
                                    ?>
                                        <li class="page-item disabled">
                                            <a class="page-link" href="index.php?pid=<?php echo b"Presentacion/Producto/consultarProductos.php"?>&pag=<?php echo ($pag+1)?>&cantidad=<?php echo $cantidad?>">Next</a>
                                        </li>
                                    <?php
                                }else{
                                    ?>
                                        <li class="page-item">
                                            <a class="page-link" href="index.php?pid=<?php echo "Presentacion/Producto/consultarProductos.php"?>&pag=<?php echo ($pag+1)?>&cantidad=<?php echo $cantidad?>">Next</a>
                                        </li>
                                    <?php
                                }
                            ?>
                            
                        </ul>
                    </nav>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
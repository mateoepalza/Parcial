<?php

    require "Logica/Facultad.php";

    include "Vista/Main/header.php";
    include "Vista/Main/nav.php";

    if(isset($_GET['pid'])){
        $var = base64_decode($_GET['pid']);
        echo $var;
        include $_GET['pid'];
    }else{
        include "Vista/Facultad/crearFacultad.php";
    }
    
    include "Vista/Main/footer.php";
?>
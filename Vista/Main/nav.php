<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#"><img src="Vista/static/img/logo.png" width=50></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?pid=<?php echo base64_encode("Vista/Facultad/crearFacultad.php") ?>">Insertar facultad <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?pid= <?php echo base64_encode("Vista/Facultad/buscarFacultad.php") ?>">Consultar facultad</a>
            </li>
        </ul>
        <div class="">
            <div id="signIn" class="btn btn-sm btn-outline-light">Sign in</div>
        </div>
    </div>
</nav>
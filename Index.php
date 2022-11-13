<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
        <script>
         alert("Porfavor inicie sesion");
         window.location="logyreg.php";
         </script>
        ';
        //header("location: logyreg.php");
        session_destroy();
        die();

    }  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Uniformes</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="estiloletras.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="Index.php">Uniformes</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logyreg.php">Iniciar sesión</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Usuario
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="Perfil.html">Perfil</a></li>
                      <li><a class="dropdown-item" href="Canasta.html">Canasta</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"href="php/cerrar_sesion.php">Cerrar sesion</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="escuelas" list="listaescuelas">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <datalist id="listaescuelas">
                  <option value="Othon Martinez Lara"></option>
                  <option value="Simon Bolivar"></option>

              </div>
            </div>
          </nav>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>    
      <div>
          <div class="imgpos">
              <div>
                 <a title="Simon Bolivar Logo" href="SimonBolivarPagina.html"><img src="SimonBolivarLogo.png" alt="#" /></a>
              </div>
             <div>
                <i class="letras">Simon Bolivar</i>
             </div>
          </div>

          <div class="imgpos2">
            <div>
              <a title="Othon Martinez" href="OthonMartinez.html"><img src="Othon logo (1).jpg" alt="#" /></a>
            </div>
            <div>
              <i class="letras">Othon Martinez Lara</i>
            </div>
          </div>
      </div>

    </body>
</html>
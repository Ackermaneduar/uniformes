<?php
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);//encriptar contraseña
    

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
            <script>
                alert("usuario almacenado exitosamente");
                window.location = "../logyreg.php";
            </script>
        ';
    }else{
        echo'
            <script>
                alert("Error usuario no almacenado");
                window.location = "../logyreg.php";
            </script>
           ';
    }
    mysli_close($conexion);

    
?>
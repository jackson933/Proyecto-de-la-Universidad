<?php 

    $conexion = mysqli_connect("localhost","root","","inicio_sesion")

    if (!empty($_POST)) {
    
        $identity=$_POST['identity'];
        $password=$_POST['password'];
        $consulta="SELECT id FROM registro where cedula='$identity' and contraseña='$password'"
    $resultado= mysqli_query($conexion,$consulta);

    $filas= mysqli_fetch_array($resultado);
    }
    if($filas['id_cargo']==1){
        header("location:admin.php");
    }else if ($filas['id_cargo']==2){
        header("location:inicio/Creacion de Carnet (PHP)/index.php")
    }




?>
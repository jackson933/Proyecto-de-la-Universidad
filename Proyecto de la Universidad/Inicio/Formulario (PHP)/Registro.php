<?php

include("conexion.php");

if (isset($_POST['registro'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['passwordConfirm']) >= 1 &&
        strlen($_POST['identity']) >= 1 
        ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $passwordConfirm = trim($_POST['passwordConfirm']);
            $identity = trim($_POST['identity']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre, email, contraseña, confirmarContraseña, cedulaIdentidad, fecha)
            VALUES('$name', '$email', '$password', '$passwordConfirm', '$identity', '$fecha')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
            ?>
            <h3 class="success" >Registro completado</h3>
            <?php
            } else {
            ?>
                <h3 class="error">Ocurrio un error al registrarse</h3>
            <?php
            }
        }   else{
            ?>
                <h3 class="error">Llena todos los campos</h3>
            <?php
        }
}

?>
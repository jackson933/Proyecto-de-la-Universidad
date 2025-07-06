<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="form-box login">
            <form method="post">
                <h1>Iniciar Sesión</h1>
                <div class="input-box">
                    <input type="text" name="identity" placeholder="Cedula de Identidad" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <i class='bx bxs-lock-alt'></i> 
                </div>
                <div class="forgot-link">
                    <a href="#">Olvidaste la contraseña</a>
                </div>
                <button type="submit" name="iniciar_sesion" class="btn">Iniciar Sesión</button>
                <p>Conoce nuestras redes sociales</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-telegram'></i></a>
                </div>
            </form>
        </div>

         <div class="form-box register">
            <form method="post">
                <h1>Registro</h1>
                <div class="input-box input-register">
                    <input type="text" name="name" placeholder="Nombre Completo" required>
                    <i class='bx bxs-user'></i> 
                </div>
                <div class="input-box input-register">
                    <input type="email" name="email" placeholder="Correo Electronico" required>
                    <i class='bx bxs-envelope'></i> 
                </div>
                <div class="input-box input-register">
                    <input type="password" id="password" name="password" minlength="8" placeholder="Contraseña" required>
                    <i class='bx bxs-lock-alt'></i> 
                </div>
                <div class="input-box input-register">
                    <input type="password" id="passwordConfirm" name="passwordConfirm" minlength="8" placeholder="Confirmar Contraseña" required>
                    <i class='bx bxs-lock-open-alt' ></i> 
                </div>
                <div class="input-box input-register">
                    <input type="text" name="identity" placeholder="Cedula de Identidad" required>
                    <i class='bx bxs-user-check'></i> 
                </div>
                    <input type="submit" name="registro" value="Enviar" class="btn"></input>
                
             
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <img src="logo.png" alt="">
                <h1>Hola, Bienvenido</h1>
                <p>¿No tienes una cuenta creada?</p>
                <button class="btn register-btn">Registrarme</button>
            </div>
            <div class="toggle-panel toggle-right">
                <img src="logo.png" alt="">
                <h1>Bienvenido Devuelta</h1>
                <p>Puedes Iniciar Sesión</p>
                <button class="btn login-btn">Iniciar Sesión</button>
            </div>
        </div>
    </div>

    <script src="codigo.js"></script>

    <?php
        include("Registro.php");
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Css/login.css">
</head>
<body>
    <main>
        <div class="contenedor">
            <div class="caja_trasera">
                <div class="caja_trasera-login">
                    <h3>Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn_iniciar-sesion">Iniciar Sesión</button>
                </div>

                <div class="caja_trasera-register">
                    <h3>Aun no tienes cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn_registrarse">Regístrarse</button>
                </div>
            </div>

            <div class="cnt_log-reg">
            <!--Formulario de Login-->
                <form action="" class="login">
                        <h2>Iniciar sesion</h2>
                        <input type="text" placeholder="Nombre completo">
                        <input type="password" placeholder="Contraseña">
                        
                        <button>Entrar</button>
                    </form>

                    
            
            <!--Formulario de registro-->
                <form  action="php/registro_usuario_be.php" method="POST" class="register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                        <input type="email" placeholder="correo" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Registrarse</button>
                    </form>
                </div>
            
        </div>
    </main>
    <script src="./js/login.js"></script>
</body>
</html>
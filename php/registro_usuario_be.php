<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO registro_bd(nombre, correo, usuario, contrasena) 
          VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

//Verificar que el correo no se repita en la bd
$verificar_c = mysqli_query($conexion, "SELECT * FROM registro_bd WHERE correo='$correo'");

if(mysqli_num_rows($verificar_c) > 0){
 echo'
    <script>
        alert("Este correo ya existe, Intenta con otro diferente");
        window.location = "../Login.php";
    </script>
 ';
  exit(); //cancela ejecucion seguida
}

//VErificar que el usuario no se repita en la bd

$verificar_u = mysqli_query($conexion, "SELECT * FROM registro_bd WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_u) > 0){
 echo'
    <script>
        alert("Este usuario ya existe, Intenta con otro diferente");
        window.location = "../Login.php";
    </script>
 ';
  exit(); //cancela ejecucion seguida
}
//Ejecuta la condicion de registrar
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario almacenado correctamente");
    window.location = "../Login.php";
    </script>
    ';
}else{
    echo'
    <script>
    alert("Intentalo de nuevo, Ususario no almacenado);
    window.location = "../Login.php";
    </script>
    ';
    
};

mysqli_close($conexion);
?>
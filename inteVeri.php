<?php
require'conexion.php';
session_start();

$clavein = $_POST['clave'];
$pass= $_POST['contra'];

$que ="SELECT COUNT(*) as contar from usuario where clave = '$clavein'
and contraseña = '$pass'";
$consulta= mysqli_query($conn,$que);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    header("location:IntePrinci.html");
}else{
    echo '<script>alert("Datos erroneos");window.location.href="IntegraLogin.html";</script>';
}


?>



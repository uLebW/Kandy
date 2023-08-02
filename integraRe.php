<?php
require'conexion.php';

    $correo = $_POST['coreo'];
    $contras = $_POST['contra'];
    $calve = $_POST['clave'];
    $nombre= $_POST['nom'];
    $fechas= $_POST['fecha'];

$consul="SELECT EXISTS (SELECT * FROM usuario WHERE Clave='$calve' or Correo='$correo' or Contraseña='$contras');";
$resultado=mysqli_query($conn,$consul);
$row=mysqli_fetch_row($resultado);

    if ($row[0]>"0") {
        echo '<script>alert("Datos ya existentes");window.location.href="integrador.html";</script>';
    }else{
        $consulta="insert into usuario(Nombre,Correo,Contraseña,FNacimiento,Clave) 
        values ('$_REQUEST[nom]','$_REQUEST[coreo]','$_REQUEST[contra]','$_REQUEST[fecha]','$_REQUEST[clave]')";
        mysqli_query($conn,$consulta);
        header("location:integraLogin.html");
    }   
?>
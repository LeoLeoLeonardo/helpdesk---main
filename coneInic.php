<?php
include("conexion.php");

$usu = $_POST["usuario"];
$pas = $_POST["password"];

//login
if(isset($_POST["btnIngresar"]))
{
    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE id_usuarios = '".$usu."' and contraseña = '".$pas."'");
    $nr = mysqli_num_rows($query);

    if($nr==1)
    {
        //echo "Bienvenido: ".$usu;
        header("Location: pagina.html");
    }else if($nr==0)
    {
        echo"No ingresó";
    }

}

//Registrar
/*
if(isset($_POST["btnRegistrar"]))
{
    $sqlgrabar = "INSERT INTO login(usuario, password) values ('$usu','$pas')";

    if(mysqli_query($conn,$sqlgrabar))
    {
        echo"<script> alert(''Usuario registrado con exito: $usu'); window.location='login.php' </script>";
    }else
    {
        echo "Error".$sql."<br>".mysql_error($conn);
    }
}*/

?>
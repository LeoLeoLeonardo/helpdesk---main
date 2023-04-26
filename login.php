<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php require 'header.php' ?>
    <form method="post" action="coneInic.php">
            <h2>Iniciar Sesión</h2>
            <input type="text" name="usuario" placeholder="id usuario" class="text" required>
            <br>
            <input type="password" name="password" placeholder="Contraseña" class="text" required>
            <br>
            <input type="submit" value="Ingresar" class="button" name="btnIngresar">
            <h5 class="Crear-cuenta">¿No tiene una cuenta todavia?</h5>
            <a href="registro.php"><button type="button" class="button" name="btnRegistrar">Crear</button></a>
    </form>
</body>
</html>






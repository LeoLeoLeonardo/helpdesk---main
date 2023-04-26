<?php 
include("mostrarDatos.php");

$objeto = new Conexion();
$conn = $objeto->Conectar();

$consulta = "SELECT idIncide, departam, tipo, descripc FROM incidencias";
$resultado = $conn->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/style.css">
    
    <title>Hello, world!</title>
  </head>
  <body>
    
    <!--Barra vertical-->
    <div class="d-flex">
    <div class="vertical-nav bg-white" id="sidebar">
            <div class="py-4 px-3 mb-4 bg-light">
                <div class="media d-flex aling-items-center"><img src="../img/yoda.jpg" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadiw-sm">
                    <div class="media-body">
                        <h4 class="m-0">Diego</h4>
                        <p class="font-weight-normal text-muted mb-0">Administrador</p>
                    </div>
                </div>
            </div>
            <div class="menu">
                <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>
                <a href="incidencias.html" class="d-block text-dark p-3 bg-light"><i clase = "icono ion-md-persona lead"></i> Incidencias</a>
                <a href="../personal/personal.html" class="d-block text-dark p-3 bg-light">Personal</a>
                <a href="../consultas/consultas.html" class="d-block text-dark p-3 bg-light">Consulta</a>
            </div>
    </div>
    <div class="w-100">
       <nav class="navbar navbar-light bg-light">
       <a class="navbar-brand" href="#">
       <a><i clase ="icono ion-md-menu"></i></a>
       <img src="../img/escudo.png" class="img-fluid" width="53" height="53" alt="">
       </a>
       </nav>

       <!--contenido-->

       <form method="post" action="registrar.php">
            <div class="mb-3 px-5 py-5   ">
                <div class="mb-3 px-5 ">
                    <label for="exampleFormControlInput1" class="form-label">Departamento</label>
                    <input type="text" class="form-control" id="departamento" name="dep">
                </div>
                <div class="mb-3 px-5">
                    <label for="exampleFormControlInput1" class="form-label">Tipo de incidencia</label>
                    <input type="text" class="form-control" id="tipo" name="tip">
                </div>
                <div class="mb-3 px-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripción" rows="3" name="des"></textarea>
                </div>    
                <div class="mb-3 px-5">
                    <input class="btn btn-primary" type="submit" value=" Enviar " name="enviar">
                    <input class="btn btn-primary" type="reset" value="Limpiar" >
                </div>
            </div>
       </form>


       <!--Data table-->

       <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id Incidencia</th>
                <th>departamento</th>
                <th>Tipo</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>

        <?php
            foreach($data as $dat){
        ?>
            
            <tr>
                <td><?php echo $dat['idIncide'] ?></td>
                <td><?php echo $dat['departam'] ?></td>
                <td><?php echo $dat['tipo'] ?></td>
                <td><?php echo $dat['descripc'] ?></td>
            </tr>

            <?php
                }
            ?>
            
            </tr>
        </tbody>
    </table>
       
        
    </div>
    </div>


<!--Termino de barra lateral-->




    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
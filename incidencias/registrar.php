<?php
include("../conexion.php");


if(isset($_POST['enviar'])){
    if( strlen($_POST['dep']) >= 1 && strlen($_POST['tip']) >= 1 && strlen($_POST['des']) >= 1 )
    {
        
        $dep = ($_POST['dep']);
        $tip = ($_POST['tip']);
        $des = ($_POST['des']);

        $reg = "INSERT INTO incidencias(departam, tipo, descripc) VALUES ('$dep','$tip','$des')";
        $res = mysqli_query($conn, $reg); 

        if($res)
        {
            ?>
                <h3>¡se enviaron los datos!</h3>
            <?php
        }else
        {
            ?>
                <h3>¡ocurrió un error!</h3>
            <?php
        }
        
    }  
}

        

?>
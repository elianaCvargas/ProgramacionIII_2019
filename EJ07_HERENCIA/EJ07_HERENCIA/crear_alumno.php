<?php
    include_once("alumno.php");
    //ISSET--> Determina si una variable está definida y no es NULL
    if (isset($_POST['Nombre']) &&
        isset($_POST['Edad']) &&
        isset($_POST['DNI']) &&
        isset($_POST['Legajo'])) 
    {
        $nombre=$_POST['Nombre'];
        $edad=$_POST['Edad'];
        $dni=$_POST['DNI'];
        $legajo=$_POST['Legajo'];

        if(empty($nombre)||empty($edad)||empty($dni)||empty($legajo))
        {
            echo "Some variables weren't setted correctly";
        }
        else
        {
            //echo "the variables were setted successfully: ";
            $miAlumno = new Alumno($nombre, $edad, $dni, $legajo);
        }
    }
?>
<?php
    include_once("alumno.php");
    include("save_file.php");
    
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
            echo "Some variables weren't setted correctly\n";
        }
        else
        {
            echo "the variables were setted successfully: \n";
            $miAlumno = new Alumno($nombre, $edad, $dni, $legajo);
            $miArchivo = new File();

        }
    }

?>
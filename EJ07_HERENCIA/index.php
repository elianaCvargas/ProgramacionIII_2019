
<?php
    include("crear_alumno.php");

    $miAlumno->retornarJSON();
    echo $miAlumno->retornarJSON();
    // echo "<br><br>";
    try
    {
        $miArchivo->save_file("asd", $miAlumno->retornarJSON());
    }
    catch(Exception $ex)
    {
         echo $ex->getMessage();
    }

?>





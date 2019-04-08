
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
    // include("save_file.php");
    // $miArchivo = new File();
    // $miArchivo->save_file("asd","asd");
      //var_dump($miAlumno);
?>





<?php
FALTA EL CLAASSSS
    include("crear_alumno.php");
    $student =  json_encode($miAlumno);
    echo $student;

    static saveFiles()
    {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="sample.csv"');
        $data = array(
                $student;
        );
    
        $fp = fopen('Datos.csv', 'wb');
        foreach ( $data as $line ) {
            $val = explode(",", $line);
            fputcsv($fp, $val);
        }
        fclose($fp);
        
    }


?>
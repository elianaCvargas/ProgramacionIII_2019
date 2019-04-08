<?php
    //include("crear_alumno.php");

    class File //extends Alumno
    {
        public function __construct() 
        {                 
        }

        function save_file($path, $miAlumno)
        {
            try 
            {
                header('Content-Type: text/csv');
                header('Content-Disposition: attachment; filename="sample.csv"');
                
                $data = array(
                        $miAlumno
                );
            
                $fp = fopen('Datos.csv', 'wb');
                if($data != null)
                {
                    foreach ( $data as $line ) 
                    {
                        $val = explode(",", $line);
                        fputcsv($fp, $val);
                    }
                    fclose($fp);
                }
                else
                {
                    fclose($fp);
                    throw new Exception("no se pudo guardar");  
                }
            
            }
            catch(Exception $ex)
            {
                 
            }
            
        }

    }
?>
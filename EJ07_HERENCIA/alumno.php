<?php
    include("persona.php");
    include("AccesoDatos.php");

    class Alumno extends Persona
    {
        protected $id;
        protected $legajo;
        protected $idLocalidad;

        // public function __construct($nombre, $edad, $dni, $legajo) 
        // {
        //     parent::__construct($nombre, $edad, $dni);
        //     $this->legajo = $legajo;        
        // }
        public function getLegajo() 
        {
            return $this->$legajo;
        }

        public function setLegajo($legajo) 
        {
            $this->$legajo = $legajo;
        }

        function retornarJSON()
        {
            return json_encode($this);
        }
        
        public function Insertar()
        {
                   $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                   $consulta =$objetoAccesoDato->RetornarConsulta("INSERT into alumno (Nombre,Edad,Documento,Legajo)values(:nombre,:edad,:dni,:legajo)");
                   $consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
                   $consulta->bindValue(':edad', $this->edad, PDO::PARAM_INT);
                   $consulta->bindValue(':dni',$this->dni, PDO::PARAM_STR);
                   $consulta->bindValue(':legajo', $this->legajo, PDO::PARAM_STR);
                   $consulta->execute();		
                   return $objetoAccesoDato->RetornarUltimoIdInsertado();
        }
    }
?>
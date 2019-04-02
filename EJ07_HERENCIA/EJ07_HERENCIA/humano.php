<?php
    class Humano implements JsonSerializable
    {
        protected $nombre;
        protected $edad;

        public function __construct($nombre, $edad) 
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        
        public function getNombre() 
        {
            return $this->nombre;
        }
        
        public function getEdad() 
        {
            return $this->edad;
        }
    
        public function jsonSerialize()
        {
            return 
            [
                'nombre'   => $this->getNombre(),
                'edad' => $this->getEdad()
            ];
        }

        function retornarJSON()
        {
            return json_encode($this);
        }    
    }
?>
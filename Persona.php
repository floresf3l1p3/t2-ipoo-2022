<?php
 class Persona
 {
     private $nombre;
     private $apellido;
     private $tipoDoc;
     private $numeroDoc;

     //contructor
     public function __construct($nombre,$apellido,$tipoDoc,$numeroDoc) {
         $this->nombre = $nombre;
         $this->apellido = $apellido;
         $this->tipoDoc = $tipoDoc;
         $this->numeroDoc = $numeroDoc;
     }

     //metodos de acceso  


     /**
      * Get the value of nombre
      */ 
     public function getNombre()
     {
          return $this->nombre;
     }

     /**
      * Set the value of nombre
      *
      * @return  self
      */ 
     public function setNombre($nombre)
     {
          $this->nombre = $nombre;
     }
     

     /**
      * Get the value of apellido
      */ 
     public function getApellido()
     {
          return $this->apellido;
     }

     /**
      * Set the value of apellido
      *
      * @return  self
      */ 
     public function setApellido($apellido)
     {
          $this->apellido = $apellido;
     }
     

     /**
      * Get the value of tipoDoc
      */ 
     public function getTipoDoc()
     {
          return $this->tipoDoc;
     }

     /**
      * Set the value of tipoDoc
      *
      * @return  self
      */ 
     public function setTipoDoc($tipoDoc)
     {
          $this->tipoDoc = $tipoDoc;
     }

     /**
      * Get the value of numeroDoc
      */ 
     public function getNumeroDoc()
     {
          return $this->numeroDoc;
     }

     /**
      * Set the value of numeroDoc
      *
      * @return  self
      */ 
     public function setNumeroDoc($numeroDoc)
     {
          $this->numeroDoc = $numeroDoc;
     }
     //metodo tostring
     public function __toString()
     {
         $cadena="Nombre: " . $this->getApellido() . ", " . $this->getNombre() . ". " . $this->getTipoDoc() . ": " . $this->getNumeroDoc();
         return $cadena;
     }
 }
 
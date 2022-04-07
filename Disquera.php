<?php
/**2. Implementar una clase Disquera con los atributos: hora_desde y hora_hasta (que indican el horario de
atención de la tienda), estado (abierta o cerrada), dirección y dueño. El atributo dueño debe referenciar a un
objeto de la clase Persona implementada en el punto 1. Defina en la clase los siguientes métodos:
a) Método constructor _ _construct () que recibe como parámetros los valores iniciales para los atributos
de la clase.
b) Los métodos de acceso de cada uno de los atributos de la clase.
c) dentroHorarioAtencion($hora,$minutos): que dada una hora y minutos retorna true si la tienda debe
encontrarse abierta en ese horario y false en caso contrario.
d) abrirDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra dentro del
horario de atención y cambia el estado de la disquera solo si es un horario válido para su apertura.
e) cerrarDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra fuera del
horario de atención y cambia el estado de la disquera solo si es un horario válido para su cierre.
f) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
g) Crear un script Test_Disquera que cree un objeto Disquera e invoque a cada uno de los métodos
implementados.
 */
class Disquera
{
  private $hora_desde;  
  private $hora_hasta;  
  private $estado;  
  private $direccion;  
  private $objPersona;//dueño
  
  //constructor
public function __construct($hora_desde,$hora_hasta,$estado,$direccion,$objPersona) {
    $this->hora_desde = $hora_desde;
    $this->hora_hasta = $hora_hasta;
    $this->estado = $estado;
    $this->direccion = $direccion;
    $this->objPersona = $objPersona;

    //metodos de acceso
    
}

    /**
     * Get the value of hora_desde
     */ 
    public function getHora_desde()
    {
        return $this->hora_desde;
    }

    /**
     * Set the value of hora_desde
     *
     * @return  self
     */ 
    public function setHora_desde($hora_desde)
    {
        $this->hora_desde = $hora_desde;

    }

    /**
     * Get the value of hora_hasta
     */ 
    public function getHora_hasta()
    {
        return $this->hora_hasta;
    }

    /**
     * Set the value of hora_hasta
     *
     * @return  self
     */ 
    public function setHora_hasta($hora_hasta)
    {
        $this->hora_hasta = $hora_hasta;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

    }

    /**
     * Get the value of objPersona
     */ 
    public function getObjPersona()
    {
        return $this->objPersona;
    }

    /**
     * Set the value of objPersona
     *
     * @return  self
     */ 
    public function setObjPersona($objPersona)
    {
        $this->objPersona = $objPersona;

    }

    public function dentroHorarioAtencion($hora,$minutos)/**c) dentroHorarioAtencion($hora,$minutos): que dada una hora y minutos retorna true si la tienda debe
    encontrarse abierta en ese horario y false en caso contrario. */
    {
        $atencion=true;
        if ($hora <= 13 && $minutos <=30 ) {
            // si la hora es mayor o igual a 13 y minutos es mayor o igual a 30 ..
             echo "open";
            $atencion=true;

        } else {
             echo"close";
             $atencion =false;
        }
        
        return $atencion;
    }
    public function abrirDisquera($hora,$minutos)/**d) abrirDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra dentro del
    horario de atención y cambia el estado de la disquera solo si es un horario válido para su apertura. */
    {   
        $this->getHora_desde();
        $hora=13;
        $minutos=30;
        $atencion1= $hora && $minutos < $hora+1 && $minutos+1 ? true:false; 
        return $atencion1;
    }
    public function cerrarDisquera($hora,$minutos)/**e) cerrarDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra fuera del
    horario de atención y cambia el estado de la disquera solo si es un horario válido para su cierre. */
    {
        
        $hora= 18;
        $minutos= 00;
        $this->getHora_hasta($hora,$minutos);
        $close= $hora && $minutos > $hora==18 && $minutos>=00 ? true:false;
        return $close;
    }
    public function __toString()
    {   $objPersona= $this->getObjPersona();
        
        $cadena="La tienda esta habierta desde:\n".$this->getHora_desde()."-hasta-".$this->getHora_hasta()."\n"."Direccion:\n". $this->getDireccion()."\n"."Su dueño es el Sr:\n".$objPersona->getNombre()."-".$objPersona->getApellido();
        return $cadena;
    }
}


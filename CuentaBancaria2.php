<?php

class CuentaBancaria2
{
    //Atributos
    private $numeroDeCuentaInt;
   // private $DNIclienteInt;
    private $saldoActualFlt;
    private $interesAnualFlt;
    private $objPersona;

    //Constructo
    public function __construct($nCuenta, $saldo, $interes,$objPersona){
        $this->numeroDeCuentaInt = $nCuenta;
        //$this->DNIclienteInt = $DNI;
        $this->saldoActualFlt = $saldo;
        $this->interesAnualFlt = $interes;
        $this->objPersona = $objPersona;
    }

    //Metodos
    //Getters y Setters

    public function getNumeroDeCuentaInt(){
        return $this->numeroDeCuentaInt;
    }

    public function setNumeroDeCuentaInt($numeroDeCuentaInt){
        $this->numeroDeCuentaInt = $numeroDeCuentaInt;
    }

    // public function getDNIclienteInt(){
    //     return $this->DNIclienteInt;
    // }

    // public function setDNIclienteInt($DNIclienteInt){
    //     $this->DNIclienteInt = $DNIclienteInt;
    // }

    public function getSaldoActualFlt(){
        return $this->saldoActualFlt;
    }

    public function setSaldoActualFlt($saldoActualFlt){
        $this->saldoActualFlt = $saldoActualFlt;
    }

    public function getInteresAnualFlt(){
        return $this->interesAnualFlt;
    }

    public function setInteresAnualFlt($interesAnualFlt){
        $this->interesAnualFlt = $interesAnualFlt;
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

    /**Metodo para actualizar el saldo segun el interés del día
     * @param void
     * @return void
     */
    public function actualizarSaldo(){
        $interesDiario = (($this->interesAnualFlt - 1)/ 365)+1;
        $this->saldoActualFlt *= $interesDiario;
    }

    /**Metodo para depositar
     * @param float $cant
     * @return string
     */
    public function depositar($cant){
        $this->saldoActualFlt += $cant;
        $resultado = "Acaba de depositar $cant y su saldo actual es $this->saldoActualFlt.\n";
        return $resultado;
    }

    /**Metodo para retirar
     * @param float $cant
     * @return string
     */
    public function retirar($cant){
        $strRespuesta = '';
        if($this->saldoActualFlt < $cant){
            $strRespuesta = "No puede retirar dicha cantidad, su saldo actual es de: \$$this->saldoActualFlt.\n";
        }else{
            $this->saldoActualFlt -= $cant;
            $strRespuesta = "Usted ha retirado $$cant y su saldo restante es de \$$this->saldoActualFlt.\n";
        };
        return $strRespuesta;
    }

    //Metodo toString
    public function __toString()
    {
        $objPersona=$this->getObjPersona();
        
        $strCuentaTotal = 
        "Nombre completo cliente:\n".$objPersona->getNombre()."-".$objPersona->getApellido()."\n".
        "Tipo documento:\n".$objPersona->getTipoDoc()."\n".
        "Número de cuenta:\n". $this->getNumeroDeCuentaInt()."\n".
        "DNI:\n".$objPersona->getNumeroDoc()."\n".
        "Saldo actual:\n".$this->getSaldoActualFlt()."\n".
        "Interés anual:\n".$this->getInteresAnualFlt()."\n";
        
        return $strCuentaTotal;
    }

}

<?php
/**b) Realizar las modificaciones necesarias en la clase CuentaBancaria (Ejercicio 14 del TP1) para que en
vez de contener como atributo el DNI del dueño de la cuenta tenga una referencia a las clase Persona. */
 include "CuentaBancaria2.php";
 include "Persona.php";

 $objPersona= new Persona("pepito","perez","DNI",45294679);

 $objCuentaBancaria2= new CuentaBancaria2("123","$123123","4%",$objPersona);

 echo $objCuentaBancaria2;


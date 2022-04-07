<?php
include "Disquera.php";
include "Persona.php";

$objPersona= new Persona("felipe","flores","DNI",123123);

$objDisquera= new Disquera("13:30","16:00","acupado","san martin 001","juan perez");

echo $objDisquera;
echo $objPersona;
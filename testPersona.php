<?php
include_once('Persona.php');
/**4. Crear un script Test_Persona que cree un objeto Persona e invoque a cada uno de los
métodos implementados */

/**
 * Esta funcion muestra por pantalla el menu de usuario y obtiene una opcion de menú
 * @return int $opcion
 */
function menu()
{
    /**
     * Declaracion de variables
     * int $opcion
     */

    /**
     * Menu que se muestra al usuario
     * Se controla la opcion ingresada desde el programa principal en el switch correspondiete
     */
    echo "--------------------------------------------------------------\n";
    echo "1) Ingresar datos persona. \n";
    echo "2) Mostrar datos. \n";
    echo "0) Salir del programa. \n";
    echo "--------------------------------------------------------------\n";

    // Ingreso y lectura de la opcion
    echo "Ingrese una opcion: ";
    $opcion = (int) trim(fgets(STDIN));

    return $opcion;
}

/**
 * Realiza la carga de valores de una persona
 * @return obj $persona
 */
function cargarDatos()
{
    /**
     * Declaracion de variables
     * string $nombre, $apellido, $tipoDocumento
     * int $numeroDocumento
     */

    echo "Ingrese el apellido de la persona: ";
    $apellido = trim(fgets(STDIN));
    echo "Ingrese el nombre de la persona: ";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese el tipo de documento: ";
    $tipoDoc = trim(fgets(STDIN));
    echo "Ingrese (sin comas, ni puntos) el numero de documento: ";
    $numeroDoc = (int) trim(fgets(STDIN));

    $persona = new Persona($nombre, $apellido, $tipoDoc, $numeroDoc);

    return $persona;
}

/**
 * PROGRAMA PRINCIPAL
 * int $opcion
 * obj $persona
 */

do {
    $opcion = menu();

    switch ($opcion) {
        case 0:
            echo "Fin del programa! \n";
            break;
        case 1:
            $persona = cargarDatos();
            break;
        case 2:
            echo $persona . "\n";
            break;
        default:
            echo "Opcion incorrecta. Verifique por favor! \n";
            break;
    }
} while ($opcion != 0);


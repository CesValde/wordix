<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */



/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de partidas 
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS", 
        "AREPA", "ILUSO", "BICHO", "KANJI", "OMEGA"
        
    ];

    return ($coleccionPalabras);
}

/**
 * Array de coleccion de palabras  // FUNCION N 2 (aun falta completar)
 *@return array
 */
    function cargarPartidas(){
        // array $coleccionPartidas
        // usar funcion array_push 
        $coleccionPartidas = [];
        $partida1 = ; //FALTA COMPLETAR ESTE MODULO AUN
     }


/**
 * Dado un numero de partida muestra en la pantalla los datos de la partida 
 *@param int $nroPartida
 */
        function datosDePartida($nroPartida){    //funcion nro 6 
            // array $coleccionPartidas
                
        echo "******************************";
        echo "Partida WORDIX" .$nroPartida . ": palabra " . $coleccionPartidas[$nroPartida - 1]["palabraWordix"]; 
        echo "Jugador :" . $coleccionPartidas[$nroPartida - 1]["usuario"];
        echo "Puntaje: " . $coleccionPartidas[$nroPartida - 1]["puntaje"]. "puntos";

            if($coleccionPartidas[$nroPartida - 1]["puntaje"] != 0){
                echo "Intento: adivino la palara en " . $coleccionPartidas[$nroPartida - 1]["intentos"]. "intentos";
            }else{
                echo "Intento: no adivino la palabra";
            }

        echo "******************************";
        }
/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/

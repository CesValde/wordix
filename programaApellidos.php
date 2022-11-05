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
        $partida1 =  ; //FALTA COMPLETAR ESTE MODULO AUN 
     }

/** FUNCION nro 3
 * Despliega el menu de opciones y retorna la opcion elegida por el usuario
 * @return int
 */
        function seleccionarOpcion(){
        // int $opcion, $minimo, $maximo
            $minimo = 1;
            $maximo = 8;
            echo "*** MENU DE OPCIONES *** 
            1) Jugar al Wordix con una palabra elegida 
            2) Jugar al Wordix con una palabra aleatoria 
            3) Mostrar una partida 
            4) Mostrar la primer partida ganadora 
            5) Mostrar resumen de Jugador 
            6) Mostrar listado de partidas ordenadas por jugador y por palabra 
            7) Agregar una palabra de 5 letras a Wordix 
            8) Salir \n";
            $opcion = solicitarNumeroEntre($minimo,$maximo);
            return $opcion;
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

/** FUNCION nro 7
 * Agrega una palabra a la lista de palabras para jugar Wordix y retorna el array modificado
 * @param array $coleccionPalabras
 * @param string $palabraNueva
 * @return array
 */
$coleccionPalabrasX = cargarColeccionPalabras(); //contiene lista original
$palabraNueva = leerPalabra5Letras();
function agregarPalabra($coleccionPalabrasX,$palabraNueva){
    array_push($coleccionPalabrasX,$palabraNueva);
    return $coleccionPalabrasX;
    }
$coleccionPalabrasX = agregarPalabra($coleccionPalabrasX,$palabraNueva)
// sobreescribe la lista original con la nueva lista actualizada
// esta variable va a usarse para elegir jugar una palabra (menu opcion 1 y 2)
// con la lista actualizada, no la original


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

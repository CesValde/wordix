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

//FUNCION 1
/**
 * Array de coleccion de palabras 
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
//FUNCION 2
/**
 * Array de coleccion de partidas  // FUNCION N 2 (completa (funciona) pero falta ver como agregar array_push para mejorar)
 *@return array
 */
    function cargarPartidas(){
        // array $coleccionPartidas
        // usar funcion array_push 
    $coleccionPartidas = [];
    $partida1 = ["palabraWordix" => "BICHO", "usuario" => "CESAR", "puntaje" => 14, "intento" => 3];
    $partida2 = ["palabraWordix" => "GATOS", "usuario" => "LUCIA", "puntaje" => 17, "intento" => 2];
    $partida3 = ["palabraWordix" => "MUJER", "usuario" => "DAVID", "puntaje" => 17, "intento" => 1];
    $partida4 = ["palabraWordix" => "QUESO", "usuario" => "MAJO", "puntaje" => 15, "intento" => 4];
    $partida5 = ["palabraWordix" => "TINTO", "usuario" => "SERENA", "puntaje" => 15, "intento" => 5];
    $partida6 = ["palabraWordix" => "VERDE", "usuario" => "CESAR", "puntaje" => 17, "intento" => 2];
    $partida7 = ["palabraWordix" => "HUEVO", "usuario" => "FRANCISCO", "puntaje" => 15, "intento" => 3];
    $partida8 = ["palabraWordix" => "NAVES", "usuario" => "CLAUDIA", "puntaje" => 18, "intento" => 2];
    $partida9 = ["palabraWordix" => "KANJI", "usuario" => "MAJO", "puntaje" => 0, "intento" => 6];
    $partida10 = ["palabraWordix" => "PIANO", "usuario" => "CRISTIAN", "puntaje" => 15, "intento" => 4];
    $partida11 = ["palabraWordix" => "VERDE", "usuario" => "KARINA", "puntaje" => 16, "intento" => 3];
    $partida12 = ["palabraWordix" => "MELON", "usuario" => "LUCIA", "puntaje" => 14, "intento" => 4];
    $partida13 = ["palabraWordix" => "BICHO", "usuario" => "LUCIA", "puntaje" => 15, "intento" => 2];
    $partida14 = ["palabraWordix" => "ILUSO", "usuario" => "SERENA", "puntaje" => 16, "intento" => 2];
    $partida15 = ["palabraWordix" => "KANJI", "usuario" => "CESAR", "puntaje" => 17, "intento" => 1];
    $partida16 = ["palabraWordix" => "AREPA", "usuario" => "CESAR", "puntaje" => 14, "intento" => 5];
  
    $coleccionPartidas = [$partida1, $partida2, $partida3, $partida4, $partida5, $partida6, $partida7, $partida8, $partida9, $partida10, $partida11, $partida12, $partida13, $partida14, $partida15, $partida16];

    return $coleccionPartidas;
 }

 //FUNCION 3
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



        
//FUNCION 4
/**
 * Verifica que los caracteres ingresados sean letras y si lo son retorna true 
 * @param string $cadena
 * @return boolean $esLetra
 */
function esPalabra($cadena)
{
    //int $cantCaracteres, $i, boolean $esLetra
    $cantCaracteres = strlen($cadena);
    $esLetra = true;
    $i = 0;
    while ($esLetra && $i < $cantCaracteres) {
        $esLetra = ctype_alpha($cadena[$i]);
        $i++;
    }
    return $esLetra;
}
/**
 * Verifica si la palabra ingresada es de 5 letras, y la retorna,
 * caso contrario, imprime que ingrese una palabra de 5 letras
 * @return string 
 */
function leerPalabra5Letras(){
    //string $palabra
    echo "Ingrese una palabra de 5 letras: \n";
    $palabra = trim(fgets(STDIN));
    $palabra  = strtoupper($palabra);                       //cambia a mayusculas

    while ((strlen($palabra) != 5) || !esPalabra($palabra)) {
        echo "Debe ingresar una palabra de 5 letras: \n";
        $palabra = strtoupper(trim(fgets(STDIN)));          //cambia a mayusculas
    }
    return $palabra;
}


//FUNCION 6 
/**
 * Dado un numero de partida muestra en la pantalla los datos de la partida 
 *@param int $nroPartida
 */
    function datosDePartida($nroPartida){    
     // array $coleccionPartidasX
        $coleccionPartidasX = cargarPartidas();
        
    echo "********************************************\n";
    echo "Partida WORDIX " .$nroPartida . ": palabra " . $coleccionPartidasX[$nroPartida - 1]["palabraWordix"]. "\n"; 
    echo "Jugador: " . $coleccionPartidasX[$nroPartida - 1]["usuario"]. "\n";
    echo "Puntaje: " . $coleccionPartidasX[$nroPartida - 1]["puntaje"]. " puntos\n";

        if($coleccionPartidasX[$nroPartida - 1]["puntaje"] != 0){
        echo "Intento: adivinó la palabra en " . $coleccionPartidasX[$nroPartida - 1]["intento"]. " intentos\n";
        }else{
        echo "Intento: no adivinó la palabra\n";
        }

    echo "********************************************\n";
}


//FUNCION 7        
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

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
    function cargarColeccionPalabras() {
        $coleccionPalabras = [
            "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
            "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
            "VERDE", "MELON", "YUYOS", "PIANO", "PISOS", 
            "AREPA", "ILUSO", "BICHO", "KANJI", "OMEGA"
        ];
        return ($coleccionPalabras);
    }



    function cargarPartidas(){
        // array $coleccionPartidas
        // usar funcion array_push 
        $coleccionPartidas = [];

        $coleccionPartidas [0] = ["palabraWordix" => "BICHO", "usuario" => "CR7", "puntaje" => 14, "intento" => 3] ;
        $coleccionPartidas [1] = ["palabraWordix" => "GATOS", "usuario" => "LUCIA", "puntaje" => 17, "intento" => 2] ;
        $coleccionPartidas [2] = ["palabraWordix" => "MUJER", "usuario" => "DAVID", "puntaje" => 17, "intento" => 1] ;
        $coleccionPartidas [3] = ["palabraWordix" => "QUESO", "usuario" => "MAJO", "puntaje" => 15, "intento" => 4] ;
        $coleccionPartidas [4] = ["palabraWordix" => "TINTO", "usuario" => "SERENA", "puntaje" => 15, "intento" => 5] ;
        $coleccionPartidas [5] = ["palabraWordix" => "VERDE", "usuario" => "CESAR", "puntaje" => 17, "intento" => 2] ;
        $coleccionPartidas [6] = ["palabraWordix" => "HUEVO", "usuario" => "FRANCISCO", "puntaje" => 15, "intento" => 3] ;
        $coleccionPartidas [7] = ["palabraWordix" => "NAVES", "usuario" => "CLAUDIA", "puntaje" => 18, "intento" => 2] ;
        $coleccionPartidas [8] = ["palabraWordix" => "KANJI", "usuario" => "MAJO", "puntaje" => 0, "intento" => 6] ;
        $coleccionPartidas [9] = ["palabraWordix" => "PIANO", "usuario" => "CRISTIAN", "puntaje" => 15, "intento" => 4] ;
        $coleccionPartidas [10] = ["palabraWordix" => "VERDE", "usuario" => "KARINA", "puntaje" => 16, "intento" => 3] ;
        $coleccionPartidas [11] = ["palabraWordix" => "MELON", "usuario" => "LUCIA", "puntaje" => 14, "intento" => 4] ;
        $coleccionPartidas [12] = ["palabraWordix" => "BICHO", "usuario" => "LUCIA", "puntaje" => 15, "intento" => 2] ;
        $coleccionPartidas [13] = ["palabraWordix" => "ILUSO", "usuario" => "SERENA", "puntaje" => 16, "intento" => 2] ;
        $coleccionPartidas [14] = ["palabraWordix" => "KANJI", "usuario" => "CESAR", "puntaje" => 17, "intento" => 1] ;
        $coleccionPartidas [15] = ["palabraWordix" => "AREPA", "usuario" => "CESAR", "puntaje" => 14, "intento" => 5] ;
        $coleccionPartidas [16] = ["palabraWordix" => "AREPA", "usuario" => "MARTA", "puntaje" => 0, "intento" => 6] ;
        // array_push($coleccionPartidas) ;

            return $coleccionPartidas;
    }



    // FUNCION EXTRA
    function actualizarColecPartidas($coleccionPartidas,$partida){
        array_push($coleccionPartidas,$partida);
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


    //FUNCION 6         // toquen 
    /**     
     * Dado un numero de partida muestra en la pantalla los datos de la partida 
     * @param int $nroPartida
     */
    function datosDePartida($nroPartida) {    
        // array $coleccionPartidasX
            $coleccionPartidasX = cargarPartidas();
        if($nroPartida==0){
            $nroPartida=$nroPartida + 1 ;
        }
        echo "********************************************\n";
        echo "Partida WORDIX " .$nroPartida . ": palabra " . $coleccionPartidasX[$nroPartida - 1]["palabraWordix"]. "\n"; 
        echo "Jugador: " . $coleccionPartidasX[$nroPartida - 1]["usuario"]. "\n";
        echo "Puntaje: " . $coleccionPartidasX[$nroPartida - 1]["puntaje"]. " puntos\n";

            if($coleccionPartidasX[$nroPartida - 1]["puntaje"] != 0){
            echo "Intento: adivinó la palabra en " . $coleccionPartidasX[$nroPartida - 1]["intento"]. " intentos\n";
            } else {
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
    function agregarPalabra($coleccionPalabras,$palabraNueva){
        array_push($coleccionPalabras,$palabraNueva);
        return $coleccionPalabras;
    }

    // MODULO 8
    /**
     * Retorna el índice de la primera partida ganada por dicho jugador. Si el jugador ganó ninguna partida, la función debe retornar el valor -1.
     * @param array $coleccionPartidas 
     * @param string $usuario 
     * @return int 
     */
    function primeraPartidaGanda($coleccionPartidas, $usuario) {            // usuario Cesar ...       CONSULTAR
        // int $indice, $i 

        $indice = -1 ;
        $i = 0 ; 
        $existe = false ; 

            while($i < count($coleccionPartidas) && $indice == -1) {
                if($coleccionPartidas[$i]["usuario"] == $usuario) {
                    if($coleccionPartidas [$i]["puntaje"] > 0) {
                        $indice = $i ;
                        $existe = true ; 
                    }elseif($coleccionPartidas [$i]["puntaje"] == 0){
                        $indice = -1 ;
                        $existe = true ; 
                        $i = count($coleccionPartidas) ;
                    }
                }
                $i++ ;
            }
            if($existe == false) {
                $indice = -3 ; 
            }
        return $indice ; 
    }     
        
        

    // MODULO 9 
    /** 
    * @param array $coleccionPartidas
    * @param string $nombreUsuario 
    * @return array $resumenJugador 
    */ 
    function mostrarResumen($coleccionPartidas, $nombreUsuario) {      // $nombreUsuario = Cesar 
        // array $resumenJugador 
        // int $partidas, $puntaje, $victorias, $intento, $intento1, $intento2, $intento3, $intento4, $intento5, $intento6
        // float $porcentajeVictorias
    
        $partidas = 0 ; 
        $puntaje = 0 ; 
        $victorias = 0 ; 
        $porcentajeVictorias = 0 ; 
        $intento1 = 0 ; 
        $intento2 = 0 ;
        $intento3 = 0 ;
        $intento4 = 0 ;
        $intento5 = 0 ;
        $intento6 = 0 ;

        for($i=0 ; $i<count($coleccionPartidas) ; $i++) {
            if($coleccionPartidas[$i]["usuario"] == $nombreUsuario) {
                $partidas++ ; 
                $puntaje = $puntaje + $coleccionPartidas[$i]["puntaje"] ; 
                    if($puntaje > 0) {
                        $victorias++ ; 
                    }
                $intento = $coleccionPartidas [$i]["intento"] ; 

                switch($intento) {
                    case 1: $intento == 1 ; 
                        $intento1++ ;           // se ve mas bonito 
                        break ;
                    case 2: $intento == 2 ; 
                        $intento2++ ; 
                        break ; 
                    case 3: $intento == 3 ; 
                        $intento3++ ; 
                        break ; 
                    case 4: $intento == 4 ; 
                        $intento4++ ; 
                        break ; 
                    case 5: $intento == 5 ; 
                        $intento5++ ; 
                        break ; 
                    case 6: $intento == 6 ;    // dejar asi o poner default ?    
                        $intento6++ ; 
                }
            } 
        }
        if($partidas == 0) {
            echo "Este jugador no tiene estadisticas para mostrar" ; 
            $resumenJugador = [
                "usuario" => $nombreUsuario ,
                "partidas" => $partidas ,
                "puntaje" => $puntaje , 
                "victorias" => $victorias , 
                "porcentajeVictorias" => $porcentajeVictorias , 
                "intento1" => $intento1 ,                         
                "intento2" => $intento2 ,
                "intento3" => $intento3 , 
                "intento4" => $intento4 , 
                "intento5" => $intento5 , 
                "intento6" => $intento6 , 
            ] ;
        } else {
        $porcentajeVictorias = (($victorias * 100) / $partidas) ; 
        $resumenJugador = [
            "usuario" => $nombreUsuario ,
            "partidas" => $partidas ,
            "puntaje" => $puntaje , 
            "victorias" => $victorias , 
            "porcentajeVictorias" => $porcentajeVictorias , 
            "intento1" => $intento1 ,                        
            "intento2" => $intento2 ,
            "intento3" => $intento3 , 
            "intento4" => $intento4 , 
            "intento5" => $intento5 , 
            "intento6" => $intento6 , 
        ] ; 
        } 
        return $resumenJugador ; 
    }
    

    // MODULO 10 
    /**
     * Solicita al usuario su nombre y lo retorna en minusculas
     * @return string $nombreJugador
     */
    function solicitarJugador() {           // preguntar mayus o minus
        // $nombreJugador
    
            echo "Ingrese su nombre: " ;
            $nombreJugador = trim(fgets(STDIN));
            $nombreJugador = strtoupper($nombreJugador);        // usamos la de mayus 

            while($nombreJugador[0] <> ctype_alpha($nombreJugador[0])) {
                echo "Ingrese un nombre valido: " ; 
                $nombreJugador = trim(fgets(STDIN)) ; 
            }
            return $nombreJugador;
    }

    // MODULO 11 COMPLEMENTO
    /** 
     * son los parametros dados para realizar el uasort en la siguiente funcion
     */
    function cmp($a,$b){
        if(strcmp($a["usuario"], $b["usuario"]) == 0){
            $orden = strcmp($a["palabraWordix"], $b["palabraWordix"]);
        } else {
            $orden = strcmp($a["usuario"], $b["usuario"]);
        }
    return $orden; 
    }

    // MODULO 11 
    /**
     * ordena las partidas segun el orden alfabetico de los jugadores y sus partidas jugadas
     */
    function orden(){
    $coleccion = cargarPartidas();
    uasort($coleccion,'cmp');
    print_r($coleccion);
    }

    // FUNCION EXTRA
    /**
     * a partir del nombre del usuario, el numero de palabra seleccionado y los arrays de 
     * palabras y partidas, este modulo evalua si la palabra ya fue jugada por ese jugador y
     * retorna -1 en ese caso, sino retorna el numero de palabra sin alterar
     */
    function palabraUsada($usuario,$palabraWordix,$coleccionPartidas,$coleccionPalabras){
        $i = 0 ;
        $palabraElegida = $coleccionPalabras[$palabraWordix] ; 
        while($i<count($coleccionPartidas) && $usuario==$coleccionPartidas[$i]["usuario"]){
            if($palabraElegida==$coleccionPartidas[$i]["palabraWordix"]){
                $palabraWordix = -1 ;
            }
            $i++ ;
        }
        return $palabraWordix ;
    }

/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


    $coleccionPartidas = cargarPartidas() ; 
    $coleccionPalabras = cargarColeccionPalabras() ; 
    $mini = 0 ;
    


//Proceso:

//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);

   


do {
    $opcion = seleccionarOpcion() ;
   

    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
            $usuario = solicitarJugador() ;
            $palabraWordix = solicitarNumeroEntre($mini, count($coleccionPalabras)) ;
            // llamdo funcion 10
            $palabraWordix= palabraUsada($usuario,$palabraWordix,$coleccionPartidas,$coleccionPalabras) ;
            while ($palabraWordix==-1){
                echo "Debe elegir otro numero de palabra" ;
                $palabraWordix = solicitarNumeroEntre($mini, count($coleccionPalabras)) ;
                $palabraWordix= palabraUsada($usuario,$palabraWordix,$coleccionPartidas,$coleccionPalabras) ;
            }

            //$partida = jugarWordix() ; // completar
            $partida=jugarWordix($palabraWordix,$Usuario) ;
            // $coleccionPartidas = actualizarColecPartidas($coleccionPartidas,$partida)
            $coleccionPartidas =actualizarColecPartidas($coleccionPartidas,$partida) ;
            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2
           
            // llamdo funcion 10 para solicitar nombre del jugador
            $usuario = solicitarJugador() ;

            //El programa debe elegir una palabra aleatoria dentro de las disponibles para jugar
            $coleccionPalabras=cargarColeccionPalabras() ;
            $palabraAleatoria = array_rand($coleccionPalabras,1) ;
            //El prograba debe verificar que la palabra seleccionada no haya sido jugada por el jugador anteriormente
            $palabraWordix= palabraUsada($usuario,$palabraAleatoria,$coleccionPartidas,$coleccionPalabras) ;
            while ($palabraWordix==-1){
                $palabraAleatoria = array_rand($coleccionPalabras,1) ;
                $palabraWordix= palabraUsada($usuario,$palabraAleatoria,$coleccionPartidas,$coleccionPalabras) ;
            }
            //jugar wordix
            $partida=jugarWordix($palabraWordix,$Usuario) ;

            // Hay que almacenar la partida
            $coleccionPartidas =actualizarColecPartidas($coleccionPartidas,$partida) ;
            break;
       
       
       
            case 3:         // LISTO funciona perfecto
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            $numeroPartida = solicitarNumeroEntre($mini, count($coleccionPartidas)) ; 
        
            echo "\n" . "\n" ; 
            datosDePartida($numeroPartida) ; 
            echo "\n" . "\n" ; 
            break ; 
            
        case 4:         // Funciona perfecto 
            $usuario = solicitarJugador() ;
            $indicePartida = primeraPartidaGanda($coleccionPartidas, $usuario) ;
                if($indicePartida == -3){
                    echo "No existe el jugador. \n" ;
                } elseif($indicePartida == -1){
                    echo "el jugador " . $usuario . " no gano ninguna partida. \n" ;
                } else {
                $indicePartida = $indicePartida + 1 ;
                datosDePartida($indicePartida) ;
                }
            break; 
        case 5:           // LISTO funciona perfecto
            $usuario = solicitarJugador() ; 
                $resumenUser = mostrarResumen($coleccionPartidas, $usuario) ;
                echo "\n" . "\n" ;
                echo "********************************************\n";
                echo "Jugador: $usuario" . "\n" ; 
                echo "Partidas: " . $resumenUser["partidas"] . "\n" ; 
                echo "Puntaje Total: " . $resumenUser["puntaje"] . "\n" ; 
                echo "Victorias: " . $resumenUser["victorias"] . "\n" ; 
                echo "Porcentaje Victorias: " . $resumenUser["porcentajeVictorias"] . "\n" ; 
                echo "Adivinadas: " . "\n" ; 
                echo "  Intento 1: " . $resumenUser["intento1"] . "\n" ; 
                echo "  Intento 2: " . $resumenUser["intento2"] . "\n" ;
                echo "  Intento 3: " . $resumenUser["intento3"] . "\n" ;    
                echo "  Intento 4: " . $resumenUser["intento4"] . "\n" ;
                echo "  Intento 5: " . $resumenUser["intento5"] . "\n" ;
                echo "  Intento 6: " . $resumenUser["intento6"] . "\n" ; 
                echo "********************************************\n";
                echo "\n" . "\n" ; 
                break; 
        case 6: 

            break; 
        
        case 7:
            $cumple = false ; 
            do{
                $palabraWordix = leerPalabra5Letras() ;
                $cumple = esPalabra($palabraWordix) ;
            } while($cumple == false) ;
            if($cumple) {
                $coleccionPalabras = agregarPalabra($coleccionPalabras, $palabraWordix) ; 
            }
            print_r($coleccionPalabras) ; 
            break;
    }
} while ($opcion != 8);



  // if($coleccionPartidas [$partida]["partida"] == )

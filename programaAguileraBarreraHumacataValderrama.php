<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github 
 Aguilera Serena - FAI-4299 - TUDW - serena.aguilera@est.fi.uncoma.edu.ar - SerenaAguilera
 Barrera Francisco Agustin - FAI-4009 - TUDW - francisco.barrera@est.fi.uncoma.edu.ar - BarreraFrancisco
 Humacata Lucia Agustina - FAI-4249 - TUDW - lucia.humacata@est.fi.uncoma.edu.ar - agustinahumacata
 Valderrama Cesar - FAI-3450 - TUDW - cesar.valderrama@est.fi.uncoma.edu.ar - CesValde
*/

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

    /**
     * Array de coleccion de palabras 
     * @return array
     */
    function cargarColeccionPalabras() {
        // array $coleccionPalabras
        $coleccionPalabras = [
            "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
            "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
            "VERDE", "MELON", "YUYOS", "PIANO", "PISOS", 
            "AREPA", "ILUSO", "BICHO", "KANJI", "OMEGA"
        ];
        return $coleccionPalabras ;
    }

    /**
     * Array con una coleccion de partidas
     * @return array
     */
    function cargarPartidas(){
        // Array $coleccionPartidas
          $coleccionPartidas = [];

        $coleccionPartidas [0] = ["palabraWordix" => "BICHO", "usuario" => "cr7", "puntaje" => 14, "intento" => 3] ;
        $coleccionPartidas [1] = ["palabraWordix" => "GATOS", "usuario" => "lucia", "puntaje" => 17, "intento" => 2] ;
        $coleccionPartidas [2] = ["palabraWordix" => "MUJER", "usuario" => "david", "puntaje" => 17, "intento" => 1] ;
        $coleccionPartidas [3] = ["palabraWordix" => "QUESO", "usuario" => "majo", "puntaje" => 15, "intento" => 4] ;
        $coleccionPartidas [4] = ["palabraWordix" => "TINTO", "usuario" => "serena", "puntaje" => 15, "intento" => 5] ;
        $coleccionPartidas [5] = ["palabraWordix" => "VERDE", "usuario" => "cesar", "puntaje" => 17, "intento" => 2] ;
        $coleccionPartidas [6] = ["palabraWordix" => "HUEVO", "usuario" => "francisco", "puntaje" => 15, "intento" => 3] ;
        $coleccionPartidas [7] = ["palabraWordix" => "NAVES", "usuario" => "claudia", "puntaje" => 18, "intento" => 2] ;
        $coleccionPartidas [8] = ["palabraWordix" => "KANJI", "usuario" => "majo", "puntaje" => 0, "intento" => 6] ;
        $coleccionPartidas [9] = ["palabraWordix" => "PIANO", "usuario" => "cristian", "puntaje" => 15, "intento" => 4] ;
        $coleccionPartidas [10] = ["palabraWordix" => "VERDE", "usuario" => "karina", "puntaje" => 16, "intento" => 3] ;
        $coleccionPartidas [11] = ["palabraWordix" => "MELON", "usuario" => "lucia", "puntaje" => 14, "intento" => 4] ;
        $coleccionPartidas [12] = ["palabraWordix" => "BICHO", "usuario" => "lucia", "puntaje" => 15, "intento" => 2] ;
        $coleccionPartidas [13] = ["palabraWordix" => "ILUSO", "usuario" => "serena", "puntaje" => 16, "intento" => 2] ;
        $coleccionPartidas [14] = ["palabraWordix" => "KANJI", "usuario" => "cesar", "puntaje" => 17, "intento" => 1] ;
        $coleccionPartidas [15] = ["palabraWordix" => "AREPA", "usuario" => "cesar", "puntaje" => 14, "intento" => 5] ;
        $coleccionPartidas [16] = ["palabraWordix" => "AREPA", "usuario" => "marta", "puntaje" => 0, "intento" => 6] ;

        return $coleccionPartidas ;
    

        /* guardamos la coleccion asi tenemos mas palabras 
        $coleccion = [];
            $pa1 = ["palabraWordix" => "SUECO", "usuario" => "kleiton", "intento" => 0, "puntaje" => 0];
            $pa2 = ["palabraWordix" => "YUYOS", "usuario" => "briba", "intento" => 0, "puntaje" => 0];
            $pa3 = ["palabraWordix" => "HUEVO", "usuario" => "zrack", "intento" => 3, "puntaje" => 9];
            $pa4 = ["palabraWordix" => "TINTO", "usuario" => "cabrito", "intento" => 4, "puntaje" => 8];
            $pa5 = ["palabraWordix" => "RASGO", "usuario" => "briba", "intento" => 0, "puntaje" => 0];
            $pa6 = ["palabraWordix" => "VERDE", "usuario" => "cabrito", "intento" => 5, "puntaje" => 7];
            $pa7 = ["palabraWordix" => "CASAS", "usuario" => "kleiton", "intento" => 5, "puntaje" => 7];
            $pa8 = ["palabraWordix" => "GOTAS", "usuario" => "kleiton", "intento" => 0, "puntaje" => 0];
            $pa9 = ["palabraWordix" => "ZORRO", "usuario" => "zrack", "intento" => 4, "puntaje" => 8];
            $pa10 = ["palabraWordix" => "GOTAS", "usuario" => "cabrito", "intento" => 0, "puntaje" => 0];
            $pa11 = ["palabraWordix" => "FUEGO", "usuario" => "cabrito", "intento" => 2, "puntaje" => 10];
            $pa12 = ["palabraWordix" => "TINTO", "usuario" => "briba", "intento" => 0, "puntaje" => 0];

            array_push($coleccion, $pa1, $pa2, $pa3, $pa4, $pa5, $pa6, $pa7, $pa8, $pa9, $pa10, $pa11, $pa12);
            return $coleccion;
        */
    }

    /**
     * Actualiza la coleccion de partidas
     * @param array $coleccionPartidas
     * @param array $partida
     * @return array
     */
    function actualizarColecPartidas($coleccionPartidas, $partida){
        // array $coleccionPartidas
        array_push($coleccionPartidas, $partida) ;
        return $coleccionPartidas ;
    }      

    /** 
     * Despliega el menu de opciones y retorna la opcion elegida por el usuario
     * @return int
     */
    function seleccionarOpcion(){
        // int $opcion, $minimo, $maximo

        $minimo = 1 ;
        $maximo = 8 ;
        echo "*** MENU DE OPCIONES *** 
        1) Jugar al Wordix con una palabra elegida 
        2) Jugar al Wordix con una palabra aleatoria 
        3) Mostrar una partida 
        4) Mostrar la primer partida ganadora 
        5) Mostrar resumen de Jugador 
        6) Mostrar listado de partidas ordenadas por jugador y por palabra 
        7) Agregar una palabra de 5 letras a Wordix 
        8) Salir \n" ;
        $opcion = solicitarNumeroEntre($minimo, $maximo) ;
        return $opcion ;
    }

    /**     
     * Dado un numero de partida muestra en la pantalla los datos de la partida 
     * @param int $nroPartida
     */
    function datosDePartida($nroPartida, $coleccionPartidas) {    
        // array $coleccionPartidas
        echo "********************************************\n";
        echo "Partida WORDIX " .$nroPartida . ": palabra " . $coleccionPartidas[$nroPartida - 1]["palabraWordix"]. "\n" ; 
        echo "Jugador: " . $coleccionPartidas[$nroPartida - 1]["usuario"]. "\n" ;
        echo "Puntaje: " . $coleccionPartidas[$nroPartida - 1]["puntaje"]. " puntos\n" ;

            if($coleccionPartidas[$nroPartida - 1]["puntaje"] != 0){
            echo "Intento: adivinó la palabra en " . $coleccionPartidas[$nroPartida - 1]["intento"]. " intentos\n" ;
            } else {
            echo "Intento: no adivinó la palabra\n" ;
            }

        echo "********************************************\n" ;
    }
      
    /** 
     * Agrega una palabra a la lista de palabras para jugar Wordix y retorna el array modificado
     * @param array $coleccionPalabras
     * @param string $palabraNueva
     * @return array
     */
    function agregarPalabra($coleccionPalabras,$palabraNueva){
        array_push($coleccionPalabras,$palabraNueva) ;
        return $coleccionPalabras ;
    }

    /**
     * Retorna el índice de la primera partida ganada por dicho jugador. Si el jugador no ganó ninguna partida, la función debe retornar el valor -1., retorna -3 si no existe el jugador
     * @param string $usuario 
     * @return int 
     */
    function primeraPartidaGanda($coleccionPartidas, $usuario) {            
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
                    }
                }
                $i++ ;
                }
                if($existe == false) {  
                $indice = -3 ; 
            }
        return $indice ; 
    }         

    /** 
    * Guarda en un array los datos del jugador de sus partidas jugadas
    * @param array $coleccionPartidas
    * @param string $nombreUsuario 
    * @return array $resumenJugador 
    */ 
    function mostrarResumen($coleccionPartidas, $nombreUsuario) {      
        // array $resumenJugador 
        // int $partidas, $puntaje, $puntajeTotal, $victorias, $intento, $intento1, $intento2, $intento3, $intento4, $intento5, $intento6
        // float $porcentajeVictorias
    
        $partidas = 0 ; 
        $puntaje = 0 ; 
        $puntajeTotal = 0 ; 
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
                $puntaje = $coleccionPartidas[$i]["puntaje"] ; 
                $puntajeTotal = $puntaje + $puntajeTotal ;
                    if($puntaje > 0) {
                        $victorias++ ; 
                    }
                $intento = $coleccionPartidas [$i]["intento"] ; 

                switch($intento) {
                    case 1: $intento == 1 ; 
                        $intento1++ ;           
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
                    case 6: $intento == 6 ;        
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

    /**
     * Solicita al usuario su nombre y lo retorna en mayusculas
     * @return string 
     */
    function solicitarJugador() {           
        // string $nombreJugador
    
        echo "Ingrese su nombre: " ;
        $nombreJugador = trim(fgets(STDIN));      

        while($nombreJugador[0] <> ctype_alpha($nombreJugador[0]) || $nombreJugador[0] == 0){     
            echo "Ingrese un nombre valido: " ; 
            $nombreJugador = trim(fgets(STDIN)) ;   
        }
        $nombreJugador = strtolower($nombreJugador);
        return $nombreJugador;
    }

    /** 
     * Son los parametros dados para realizar el uasort en la siguiente funcion
     * @param array $partidaA
     * @param array $partidaB
     * @return int
     */
    function cmp($partidaA,$partidaB){
        // int $orden
        if(strcmp($partidaA["usuario"], $partidaB["usuario"]) == 0){
            $orden = strcmp($partidaA["palabraWordix"], $partidaB["palabraWordix"]);
        } else {
            $orden = strcmp($partidaA["usuario"], $partidaB["usuario"]);
        }
    return $orden; 
    }

    /**
     * Ordena las partidas segun el orden alfabetico de los jugadores y sus partidas jugadas
     * @param array $coleccionPartidas
     */
    function orden($coleccionPartidas){
        uasort($coleccionPartidas, 'cmp');
        print_r($coleccionPartidas);
    }

    /**
     * Evalua si la palabra ya fue jugada por un jugador y retorna -1 en ese caso, sino retorna el numero de palabra sin alterar
     * @param string $usuario
     * @param int $palabraWordix
     * @param array $coleccionPartidas
     * @param array $coleccionPalabras
     * @return int
     */
    function palabraUsada($usuario,$palabraWordix,$coleccionPartidas,$coleccionPalabras){
        // string $palabraElegida
        $i = 0 ;
        $palabraElegida = $coleccionPalabras[$palabraWordix] ; 
        while($i < count($coleccionPartidas) && $usuario == $coleccionPartidas[$i]["usuario"]){
            if($palabraElegida == $coleccionPartidas[$i]["palabraWordix"]){
                $palabraWordix = -1 ;
            }
            $i++ ;
        }
        return $palabraWordix ;
    }

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

// Declaración de variables:
// array $coleccionPartidas, $coleccionPalabras, $partida, $resumenUser
// int $mini, $opcion, $palabraWordix, $palabraAleatoria, $numeroPartida, $indicePartida, $min
// string $usuario, $palabraJugar, $palabraNueva
// boolean $cumple, $existe

// Inicialización de variables:

    $coleccionPartidas = cargarPartidas() ; 
    $coleccionPalabras = cargarColeccionPalabras() ; 
    $mini = 0 ;
    $min = 1 ;
    
// Proceso:

do {
    $opcion = seleccionarOpcion() ;
   
    switch ($opcion) {
        case 1: 
            $usuario = solicitarJugador() ;
            // El usuario debe elegir una palabra dentro de las disponibles para jugar
            $palabraWordix = solicitarNumeroEntre($mini, count($coleccionPalabras)) ;
            // El programa debe verificar que la palabra seleccionada no haya sido jugada por el jugador anteriormente
            $palabraWordix = palabraUsada($usuario, $palabraWordix, $coleccionPartidas, $coleccionPalabras) ;
            while ($palabraWordix == -1){
                echo "Debe elegir otro numero de palabra \n" ;
                $palabraWordix = solicitarNumeroEntre($mini, count($coleccionPalabras)) ;
                $palabraWordix = palabraUsada($usuario, $palabraWordix, $coleccionPartidas, $coleccionPalabras) ;
            }
            $palabraJugar = $coleccionPalabras[$palabraWordix] ;
            // Jugar wordix
            $partida = jugarWordix($palabraJugar, $usuario) ;
            $coleccionPartidas = actualizarColecPartidas($coleccionPartidas, $partida) ;
            break ;
        case 2: 
            $usuario = solicitarJugador() ;
            // El programa debe elegir una palabra aleatoria dentro de las disponibles para jugar
            //$coleccionPalabras = cargarColeccionPalabras() ;
            $palabraAleatoria = array_rand($coleccionPalabras, 1) ;
            // El programa debe verificar que la palabra seleccionada no haya sido jugada por el jugador anteriormente
            $palabraWordix = palabraUsada($usuario, $palabraAleatoria, $coleccionPartidas, $coleccionPalabras) ;
            while ($palabraWordix == -1){
                $palabraAleatoria = array_rand($coleccionPalabras, 1) ;
                $palabraWordix = palabraUsada($usuario, $palabraAleatoria, $coleccionPartidas, $coleccionPalabras) ;
            }
            $palabraJugar = $coleccionPalabras[$palabraWordix] ;
            // Jugar wordix
            $partida = jugarWordix($palabraJugar, $usuario) ;
            // Almacena la partida
            $coleccionPartidas = actualizarColecPartidas($coleccionPartidas, $partida) ;
            break ;
        case 3:         
            // Muestra los datos de la partida seleccionada
            $numeroPartida = solicitarNumeroEntre($min, count($coleccionPartidas)) ; 
        
            echo "\n" . "\n" ; 
            datosDePartida($numeroPartida, $coleccionPartidas) ; 
            echo "\n" . "\n" ; 
            break ; 
        case 4:        
            // Muestra la primer partida ganada por el jugador
            $usuario = solicitarJugador() ;
            $indicePartida = primeraPartidaGanda($coleccionPartidas, $usuario) ;
                if($indicePartida == -3){
                    echo "No existe el jugador. \n" ;
                } elseif($indicePartida == -1){
                    echo "el jugador " . $usuario . " no gano ninguna partida. \n" ;
                } else {
                $indicePartida = $indicePartida + 1 ;
                datosDePartida($indicePartida, $coleccionPartidas) ;
                }
            break ; 
        case 5:         
            // Muestra el resumen del jugador 
            $usuario = solicitarJugador() ; 
                $resumenUser = mostrarResumen($coleccionPartidas, $usuario) ;
                echo "\n" . "\n" ;
                echo "********************************************\n" ;
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
                echo "********************************************\n" ;
                echo "\n" . "\n" ; 
                break; 
        case 6: 
            // Muestra todas las partidas ordenadas por usuario y por palabra jugada
            orden($coleccionPartidas) ;
            break ; 
        case 7:
            // Agrega una palabra nueva para jugar wordix
            $cumple = false ;           
            do{
                $palabraNueva = leerPalabra5Letras() ;
                $cumple = esPalabra($palabraNueva) ;
            } while($cumple == false) ;

            $existe = false ;
            foreach($coleccionPalabras as $valor => $elemento){               
                if($coleccionPalabras[$valor] == $palabraNueva) {
                    $existe = true ;        
                }  
            }
            if($existe){
                echo "La palabra ya existe \n" ;
            }else{
                $coleccionPalabras = agregarPalabra($coleccionPalabras, $palabraNueva) ; 
                print_r($coleccionPalabras) ;
            }
            break ;
    }
} while ($opcion != 8) ; 
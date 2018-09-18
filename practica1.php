<?php

	$integer = 10;
	$float = 12.4;
	$booleanT = true;
	$booleanF = false;
	$string = "HCI";
	$array = array("key1", "hello", "key2", "world");
	$array2 = array("key1" => "hello", "key2" => "world");

	class StrValTest{
		private $miVar = "clase1";
		public $miVar2 = "clase2";
		public function __toString(){
			return __CLASS__; #retorna el nombre de la clase
		}
		public function example(){
			return "esto es una prueba";
		}
	}

	echo "Entero: ". intVal($integer)."<br/>"; # punto para concatena
	echo "Flotante: ". floatVal($float)."<br/>";
	echo "Booleano Verdadero: ". intVal($booleanT)."<br/>";
	echo "Booleano Falso: ". intVal($booleanF)."<br/>";
	echo "Cadena: ".$string."<br/>";
	
	echo "Hex-dec: ".intVal(0x165)."<br/>"; #0x + numero (numero hexadecimal)

	echo "Clase-Cadena: ".strVal(new strValTest)."<br/>";
	# gettype() para obtener el tipo de una $variable

	echo "Cadena-Entero: ".intVal($array)."<br/>"; #Arreglo con contenido = 1.

	var_dump((array)new StrValTest());

	echo "<br/>";

	var_dump((object) $float);

/*
 	$dec = 220;
 	$hex = '';

 	while(dec > 0):
 		$int  = intVal($dec/16);
 		$float = ($dec/16) - $int;
 		hex = hex.strVal(float*16);
 		$dec = $int;

 	echo hex;
 */

?>

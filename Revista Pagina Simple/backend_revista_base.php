<?php

	require_once './conexion_bd.php';
	$observerclass = new Observer();
	// capturar información del formulario de busqueda
	if(isset($_GET['search']) && !empty($_GET)){
		$obj = $_GET['search'];
		$observerclass->getUser($mysqli,$obj);
	}

	if(isset($_POST['identification']) && !empty($_POST)){		
		$obj = (object)$_POST;
		$observerclass ->insertUser($mysqli,$obj);
	}
	if(isset($_POST['identification_sus']) && !empty($_POST)){		
		$obj = (object)$_POST;
		$observerclass ->suscribeUser($mysqli,$obj);
	}


	

	/**
	 * 
	 */
	class Observer{
		function getUser($mysqli,$obj){

		$queryRevista = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");

		$valores = mysqli_fetch_array($queryRevista);

		if(isset($_GET['search'])){
			if(count($valores) > 0){
				echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
			}else{
				echo "No estas registrado, por favor registrate antes de realizar una suscripción";
			}
		}
		
	}	

		function insertUser($mysqli, $obj){
			if(isset($_POST)){			
				$queryInsertid = $mysqli -> query("INSERT INTO 
					usuario (id_usuario,nombre,apellido,edad,cod_ciudad) VALUES (".$obj->identification.", '".$obj->first_name."','". $obj->last_name."',".$obj->age.",'".$obj->city."')");
				echo "Hola <b>".$obj->first_name."</b> te acabas de registrar :D";
				}

		}

		function suscribeUser($mysqli, $obj){
			$querySub = $mysqli -> query("INSERT INTO suscriptores (id_revista,id_usuario) VALUES (".$obj->magazine.",".$obj->identification_sus.")");
			echo "Hola te acabas de suscribir";
		}	
		
	}

	

	
?>
	





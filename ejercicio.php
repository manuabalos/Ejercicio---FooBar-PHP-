<?php 

	class Juego{

 		function comenzar(){
 			for($i=1;$i<=100;$i++){
 				echo $i."<br>";
 			}
 		}
 		
 	}

 	$mi_juego = new Juego();
 	$mi_juego->comenzar();

?>
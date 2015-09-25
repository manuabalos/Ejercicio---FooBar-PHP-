 <?php 

 	class Juego{

 		function comenzar(){

 			for($i=1;$i<=100;$i++){
 				
		 		$esDivisible = false;

		 		if($i%3==0){
		 			echo "Foo";
		 			$esDivisible = true;
		 		}

		 		if($i%5==0){
		 			echo "Bar!";
		 			$esDivisible = true;
		 		}

		 		if($esDivisible==false){
		 			echo $i;
		 		}

		 		echo "<br>";
		 	}
 		}
 	}

 	$mi_juego = new Juego();
 	$mi_juego->comenzar();

 ?>
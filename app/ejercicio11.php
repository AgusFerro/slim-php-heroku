<?php

/*WYBRANSKI ROMANO , CRISTIAN ANDRES*/

$colores = array('rojo','azul','amarillo','verde');
$marca = array("DELL","APPLE","PARKER");
$trazo = array("fino","grueso","moderado");
$precio = array(99,87,65,23);

$lapicera = [ "color" => $colores,
			  "marca" => $marca,
			  "trazo" => $trazo,
			  "precio" => $precio

];


/*for ($i=0; $i < 3 ; $i++) { 
	printf("LAPICERA %d <br> color: %s<br>marca:%s<br>trazo:%s<br>precio:%d<br><br> ",$i+1,$colores[rand(0,3)],
		$marca[rand(0,2)],$trazo[rand(0,2)],$precio[rand(0,3)]);
}
*/
echo "LAPICERA<br>";
foreach ($lapicera as $key => $value) {
	printf("%s: %s<br>",$key,$value[rand(0,2)]);
}

?>

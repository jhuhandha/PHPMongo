<?php 

	$conexion = new MongoClient( "mongodb://root:root@ds061601.mongolab.com:61601" ); // concectar a un host remoto en un puerto dado
	var_dump($conexion);
 ?>
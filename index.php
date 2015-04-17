<?php 
	
	//
	$conexion = new MongoClient("mongodb://root:juan123@ds041157.mongolab.com:41157/mongophp"); // concectar a un host remoto en un puerto dado
	//ar_dump($conexion);

	// $doc = array(
	//     "name" => "MongoDB3",
	//     "type" => "database3",
	//     "count" => 3,
	//     "info" => (object)array( "x" => 203, "y" => 102),
	//     "versions" => array("0.9.7", "0.9.8", "0.9.9")
	// );
	
	$coleccion = $conexion->mongophp->info;

	//$coleccion->insert( $doc );


	// $cursor = $coleccion->find();
	// foreach ( $cursor as $id => $valor )
	// {
	//     echo "$id: ";
	//     var_dump( $valor );
	// }


	$consulta = array( 'name' => 'MongoDB' );
	$cursor = $coleccion->find( $consulta );

	while ( $cursor->hasNext() )
	{
	    var_dump( $cursor->getNext() );
	}
 ?>
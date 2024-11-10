<?php
function getLink() {
	try {
	    $link = mysqli_connect("127.0.0.1", "prestamosdbuser", "prestamosdbuser", "prestamosdb");    
	} catch (Exception $e) {
	    //echo $e -> getMessage();
	    //echo "Error: No se pudo conectar a MySQL." .'<br>'. PHP_EOL;
	    //echo "errno de depuración: " . mysqli_connect_errno() .'<br>'. PHP_EOL;
	    //echo "error de depuración: " . mysqli_connect_error() .'<br>'. PHP_EOL;
	    header('Location: getToPost.php?url=index.php&msg=Se ha detectado una incidencia temporal en el servicio de datos');    
	    exit;
	}
	return $link;
}

?>
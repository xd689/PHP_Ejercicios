<?php

function getLink(){
    try {
        echo "test2";
        $link = mysqli_connect("localhost", "prestamodbuser", "test", "prestamodb");
        
    } catch (Exception $e) {
        header('Location: getToPost.php?url=index.php&msg=Se ha detectado una incidencia temporal en el servicio de datos');    
        exit;
    }
    echo "test3";
    return $link;
}

?>
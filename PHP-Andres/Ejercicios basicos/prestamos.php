<?php
    /* Aprendiendo bucles php
    $myArray=array(array('a','b'),array('c'),array('d','e','f'));
    echo "Mi array es <br>\n";
    print_r($myArray);

    //Dos bucles for para imprimir un array
    for($x=0;$x<sizeof($myArray); $x++){
        for($y=0;$y<sizeof($myArray[$x]); $y++){
            echo "La posicion [$x][$y] vale ".$myArray[$x][$y]."<br>\n";
        }
    }
    */

    
    //Calculadora
	$capital = $_POST['capital'];
    // plazo <- 15*12;
    $plazo = $_POST['ans']*12;
    // interes <- (4/100)/12
    $interes = $_POST['interes']/1200;
    $cuota = ($capital*$interes)/(1-pow(1+$interes,-$plazo));
    echo "Importe: $capital<br>";
    echo "Plazo: $plazo<br>";
    echo "Interes: $interes<br>";
    echo "La cuota resultante es de: ".$cuota;


?>
<?php
$n1 = $_REQUEST['n1'];
$n2 = $_REQUEST['n2'];

function menorMayor($a, $b) {
	$resultado = array($a, $b);
	if($b<$a) $resultado = array($b,$a);
	return $resultado;
}

// 2.5 puntos
// Debe mostrar en pantalla si el dividendo es divisible por el divisor
// Ejemplo: 2 es divisible por 10
function divisible($dividendo, $divisor) {
	$array = menorMayor($dividendo, $divisor);
	$dividendo = $array[1];
	$divisor = $array[0];
	if($dividendo % $divisor == 0) {
		print("El dividendo ($dividendo) es divisible por el divisor ($divisor) <br>\n");
	}
}

// 2.5 puntos
// Debe mostrar en pantalla la relación mayor, menor o igual entre los números
// Condición: hacer uso if anidados
// Ejemplo: 2 es menor que 10
function compara($a, $b) {
	if($a > $b) {
		$resultado = "$a es mayor que $b";
	}
	elseif($a < $b) {
		$resultado = "$a es menor que $b";
	}
	elseif($a == $b) {
		$resultado = "$a es igual que $b";
	}

	echo "$resultado<br>\n";

}

// 2.5 puntos
// Debe mostrar en pantalla todos los números del número más pequeño hasta el más grande
// Condición: hacer uso de bucle for
// Ejemplo: 2 3 4 5 6 7 8 9 10
function listado($inf,$sup) {
	$array = menorMayor($inf, $sup);
	$i=$array[0];
	$fin=$array[1];
	for($i;$i<=$fin;$i++){
		if (esPrimo($i)) echo "$i es primo";
	}
	echo("<br>\n");
}

function esPrimo($i){
	for ($x=2;$x<$i;$x++) {
		if($i % $x == 0) return false;
	}
	return true;
}
// 2.5 puntos
// Debe mostrar en pantalla del número menor elevado al mayor
// Condición: hacer uso de bucle while
// Ejemplo: 2 elevado a 10 es 1024
function potencia($base, $exp) {
	$i=0;
	$resultado=1;
	while($i<$exp){
		$resultado= $resultado*$base;
		$i++;
	}
	print("$base elevado a $exp es $resultado <br>\n");
}

divisible($n1,$n2);
compara($n1,$n2);
listado($n1,$n2);
potencia($n1,$n2);
?>
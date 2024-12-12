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
	if ($dividendo % $divisor) echo("$dividendo no es divisible por $divisor<br>\n");
	else echo("$dividendo es divisible por $divisor<br>\n");
}

// 2.5 puntos
// Debe mostrar en pantalla la relación mayor, menor o igual entre los números
// Condición: hacer uso if anidados
// Ejemplo: 2 es menor que 10
function compara($a, $b) {
	if($a > $b) echo "$a es mayor que $b<br>\n";
	elseif($b > $a) echo "$a es menor que $b<br>\n";
	else echo "$a y $b son iguales<br>\n";
}

// 2.5 puntos
// Debe mostrar en pantalla todos los números del número más pequeño hasta el más grande
// Condición: hacer uso de bucle for
// Ejemplo: 2 3 4 5 6 7 8 9 10
function listado($inf,$sup) {
	$array = menorMayor($inf, $sup);
	$final = $array[1];
	$i = $array[0];
	for($i;$i<=$final;$i++) echo "$i ";
	echo "<br>\n";
}

// 2.5 puntos
// Debe mostrar en pantalla del número menor elevado al mayor
// Condición: hacer uso de bucle while
// Ejemplo: 2 elevado a 10 es 1024
function potencia($base, $exp) {
	$resultado=1;
	$i=0;
	while($i<$exp){
		$resultado *= $base;
		$i++;
	}
	echo "$base elevado a $exp es $resultado <br>\n";
}

//Calcular los numeros primos dentro del rango
function rangoPrimos($a,$b){
	$array = menorMayor($a, $b);
	$end = $array[1];
	$start = $array[0];
	for($x=$start;$x<=$end;$x++){
		if(esPrimo ($x)) echo "$x es primo<br>\n";
	}
}

function esPrimo($x){
	for($y=2;$y<$x;$y++){
		if ($x % $y == 0) return false;
	}
	return true;
}
function listadoFactorial($inf,$sup) {
	$array = menorMayor($inf, $sup);
	$final = $array[1];
	$i = $array[0];
	for($i;$i<=$final;$i++) print(factorial($i)."<br>");
	echo "<br>\n";
}
//Factorial de un nuero
function factorial($a){
	$resultado=1;
	for($i=1;$i<=$a;$i++) $resultado *= $i;
	return "El factorial de $a es $resultado";
}

divisible($n1,$n2);
compara($n1,$n2);
listado($n1,$n2);
potencia($n1,$n2);
rangoPrimos($n1,$n2);
listadoFactorial($n1,$n2);
?>
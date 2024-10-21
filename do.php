<?php
// 0.5 puntos
/*
Esta funcion comprueba si a es divisible entre b, utiliza el operador ternario para resumir la función y,
utliza return para que devuelva Falso en caso de no ser divisible o Verdadero en caso de sí serlo.
*/
// Explique la lógica computacional de esta función
function divisible($a, $b) {
	return ($a%$b)? false:true;
}

// 0.5 puntos
/*
Esta función recoge el valor de a y b, si a es mayor que b, cambiará los valores. La variable t hace referencia que es temporal, y
se usará para cambiar el valor de b almacenando el de a y mas tarde devolviéndolo.
*/
// Explique la lógica computacional de esta función
function menorMayor(&$a, &$b) {
	if($a>$b) {
		$t = $a;
		$a = $b;
		$b = $t;
	}
}

// 2.0 puntos
// Implemente función que calcule el sumatorio de un rango
/*
En esta función R lo utilizo como contador. He definido que mi contador empieza en mi número pequeño, por lo que recorrerá la función
hasta que sea igual o menor que mi número grande. Cuando me lo dé, sumaré los números del rango y devuelvo mi resultado. 
*/
// Condición: uso de un bucle for
// Ejemplo: sumatorio(2,4): 9 (2+3+4)
function sumatorio($b, $e) {
	$r = 0;
	for ($r=$b; $r<=$e; $r++ ) { 
		$resul += $r;
	}
	return("$resul ");
}

// 2.0 puntos
// Implemente función que muestre en incrementos de 2 un rango de números 
/*
En esta función he utilizado I definido como iniciador del rango, la variación es que le sumo dos por cada aumento mientras siga siendo menor que
el número grande. Le pido echo con un espacio para que me muestre cada número a comprobar y cuando acabe le pido un break.
*/
// Condición: uso de un bucle for
// Ejemplo: deDosEnDos(2,10): 2 4 6 8 10
function deDosEnDos($inf, $sup) {
	for ($i=$inf; $i <= $sup; $i +=2 ) { 
		echo "$i ";	
	}
	echo "<br>";
}

// 2.0 puntos
// Implemente función que muestre los números impares del rango 
/*
En esta función, utilizo el iterador i con el valor del numero inferior y compararlo con el numero superior mientras sea inferior a él. Compruebo
si es divisible entre 2 ya que siempre que no lo sea hará un echo y aumentará el valor del iterador i.  
*/
// Condición: uso de un bucle while
// Ejemplo: pares(2, 10): 3 5 7 9
function impares($inf, $sup) {
	$i = $inf; 
	while ($i <= $sup) {
		if ($i % 2 != 0) {
			echo "$i ";
		}
		$i++;
	}
	echo "<br>"; 
}

// 2.0 puntos
// Implemente función que muestre la factorización en números primos de un número
// Ejemplo: primos(8): 2 2 2, primos(210): 2 3 5 7  
function primos($n) {
}

$n1 = $_REQUEST['n1'];
$n2 = $_REQUEST['n2'];
menorMayor($n1, $n2);
sumatorio($n1, $n2);
deDosEnDos($n1, $n2);
impares($n1, $n2);

// 1.0 puntos
// Implemente las demás opciones del condicional múltiple
switch ($_REQUEST['op']) {
	case 'o1':
		echo "El sumatorio de $n1 a $n2 es ".sumatorio($n1,$n2)."<br>\n";
		break;
	case 'o2':
		echo "El rango de números pares $n1 a $n2 es ".deDosEnDos($n1,$n2)."<br>\n";// tú código aquí
	case 'o3':
		echo "El rango de número impares $n1 a $n2 es ".impares($n1,$n2)."<br>\n";// tú código aquí
		break;
	case 'o4':
		// tú código aquí
		break;
}
?>

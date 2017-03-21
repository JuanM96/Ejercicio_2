<?php
/*APlicacion 1
//siempre dentro del tag php
//Primer Ejercicio
// $nombre = "Juan"; // signo $ siempre antes de una variable
// echo $nombre."<br>"; // salto de linea
// echo "Hola Mundo".$nombre;
// Aplicacion Nº1
$numero = 1;
$res = 0;
$contador = 0;
while ($res <= 1000) {
    $res = $res + $numero;
    $numero = $numero + 1;
    $contador = $contador + 1;
}
echo "Resultado: ".$res."<br>Se Sumo ".$contador." veces.";
*/
//para mostrar array usar var_dump
$promedio = 0;
$lista = array();
//$lista = array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)); // manera 1

/*
for ($i=0; $i <5; $i++) { 
    $lista[$i] = rand(1,10); // Manera 2
}*/
for ($i=0; $i <5; $i++) { 
    array_push($lista,rand(1,10)); // Manera 3
}
print_r($lista);
var_dump($lista);
for ($i=0; $i < 5; $i++) { 
    $promedio += $lista[$i];
}
$promedio = $promedio / 5;
if ($promedio < 6) {
    echo "<br>Promedio : ".$promedio." < 6";
}
else if ($promedio > 6) {
    echo "<br>Promedio : ".$promedio." > 6";
}
else {
    echo "<br>Promedio : ".$promedio." = 6";
}
?>
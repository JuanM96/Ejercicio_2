<?php
//para mostrar array usar var_dump
$promedio = 0;
//$lista = array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)); // manera 1

$lista = array();
for ($i=0; $i <5; $i++) { 
    $lista[$i] = rand(1,10); // Manera 2
}

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
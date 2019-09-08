<?php
$data1text = '2018-08-01';
// $data2text = '2020-05-27';
$data2text = date('Y');

$date1 = new DateTime($data1text);
$date2 = new DateTime($data2text);
//Repare que inverto a ordem, assim terei a subtração da ultima data pela primeira.
//Calculando a diferença entre os meses
$meses = ((int)$date2->format('m') - (int)$date1->format('m'))
//    e somando com a diferença de anos multiplacado por 12
    + (((int)$date2->format('y') - (int)$date1->format('y')) * 12);

echo $meses;//2

echo "<br>";
echo "<br>";

$bolsa = 800;

if($meses <= 12){
$soma = $bolsa / 12;
$resultado = $soma * $meses;
// echo $resultado;
}else{
  $soma = $bolsa / 24;
  $resultado = $soma * $meses;
}
 echo $resultado;

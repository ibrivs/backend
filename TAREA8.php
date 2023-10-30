<?php
//punto a
echo "<h3>PUNTO A</h3>";
function cuadrado($lado){
  $superficie = pow($lado, 2) ;
  $perimetro = $lado * 4 ;
  echo "El perimetro del cuadrado es de: ". $perimetro . "<br>";
  echo "La superficie del cuadrado es de: " . $superficie . "<br>";
} ;
cuadrado(4) ;

//punto b
//mayusc
echo "<h3> PUNTO B</h3>";
function mayuscula($texto) {
  $mayuscula = strtoupper($texto);
  echo $mayuscula. "<br>";
} ;
mayuscula("hola que tal estas") ;
//minus
function minuscula($texto) {
  $minuscula = strtolower($texto);
  echo $minuscula . "<br>";
} ;
minuscula("HOLA MUNDO");
//punto c
function meses($mes) {
  if ($mes == 2) { //febrero
    return "El mes ingresado tiene 28 o 29 días";
  } elseif ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) { //abril,junio,septiembre,noviembre
    return "El mes ingresado tiene 30 dias";
  }elseif ($mes == 1 ||$mes== 3||$mes== 5||$mes== 7||$mes== 8|| $mes == 10||$mes== 12) { //Enero, marzo,mayo,julio,octubre,diciembre
    return "El mes ingresado tiene 31 dias" ;
  }else {
    return "El mes ingresado es invalido";
  }  ;
} ;
echo meses(12);
 ?>

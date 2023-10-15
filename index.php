<?php
//PUNTO 1
 echo "<h3> Punto 1 </h3>" ;
 $num1 = 19 ;

if ($num1 > 0) {
  echo "El numero ingresado es positivo" ;
}

//PUNTO 2
 echo "<h3> Punto 2 </h3>";
 $num2 = 3 ;
 if ($num2 <10 || $num2 >1) {
  echo "El numero ingresado es mayor a 1 y menor a 10";
 }

//PUNTO 3
 echo "<h3> Punto  3 </h3>";
 $num3 = 9 ;

 if ($num3 >= 10 || $num3 <2) {
   echo "El número ingresado es mayor o igual a 10 o menor a 2";
 } else {
  echo "El número ingresado no pudo ser validado";
 }

//PUNTO 4
 echo "<h3> Punto 4 </h3>";
 $numero1 = 8 ;
 $numero2 = 5 ;

 if ($numero1 > $numero2) {
   $resta = $numero1 - $numero2 ;
   $suma = $numero1 + $numero2 ;
   echo "Suma: $suma" . "<br>" . "Resta: $resta" . "<br>";
 } elseif ($numero2 > $numero1) {
   $mult = $numero1 * $numero2 ;
   $div = $numero2 / $numero2 ;
   $resto = $numero2 % $numero1 ;
   echo "Multiplicacion: $mult" . "<br>" . "Division: $div". "<br>". "Resto: $resto";
 } else {
   echo "Los numeros ingresados son iguales.";
 }

 ?>

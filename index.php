<?php
 $hola = "<h1>Hola Mundo</h1>" ;
 echo "$hola" ;
 //ENTEROS
 $numero1 = 35 ;
 $numero2 = 5 ;

 //PUNTO 3
 $suma = $numero1 + $numero2 ;
 $resta = $numero1 - $numero2 ;
 $multiplicacion = $numero1 * $numero2 ;
 $division = $numero1 / $numero2 ;
 $resto = $numero1 % $numero2 ;

 //ecos p3
 echo "<h3> PUNTO 3 </h3>";
 echo "La suma de $numero1 y $numero2 es igual a $suma";
 echo "<br>";
 echo "La resta de $numero1 y $numero2 es igual a $resta";
 echo "<br>";
 echo "La multiplicacion de $numero1 y $numero2 es igual a $multiplicacion";
 echo "<br>";
 echo "La division de $numero1 y $numero2 es igual a $division";
 echo "<br>";
 echo "El resto de $numero1 y $numero2 es igual a $resto";
 echo "<br>";

 //PUNTO 4
 $faren = 32 ;
 $celsius = 20 ;

 //calculo
 $temp = $celsius * 9/5 + $faren ;

 //eco p4
 echo "<h3> PUNTO 4 </h3>";
 echo "La temperatura de $celsius °C es igual a $temp °F";
 echo "<br>";

 /*PUNTO 5
   rectangulo*/
 $altura = 12 ;
 $base = 18 ;

//calculos
 $arear = $altura * $base ;
 $perimer = $altura + $base + $altura +$base ;

 //eco p5 rec
 echo "<h3> PUNTO 5 </h3>";
 echo "<h4>RECTANGULO</h4>";
 echo "El area de un rectangulo de $altura cm de altura y $base cm de base es igual a $arear";
 echo "<br>";
 echo "El perimetro del mismo rectangulo es igual a $perimer";
 echo "<br>";

 //circulo
 $pi  = 3.14159 ;
 $radio = 30 ;
 $radio2 = $radio * $radio ;

//calculos
 $perimec = 2 * $pi * $radio ;
 $areac = $pi * $radio2 ;

 //eco p5 circulo
 echo "<h4>CIRCULO</h4>";
 echo "El area de un circulo de radio $radio cm es igual a $areac cm";
 echo "<br>";
 echo "El perimetro del mismo es igual $perimec cm";
 ?>

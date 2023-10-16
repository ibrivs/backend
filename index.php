<?php
//UNO
echo "<h3> PUNTO A </h3>";
$numero1 = 1;

while ($numero1 < 10) {
  echo "El numero es:". $numero1. "<br>";
  $numero1 ++;
}

//DOS
echo "<h3> PUNTO B </h3>";
$numero2 = 9;

while ($numero2 > 0) {
  echo "El numero es:" . $numero2 . "<br>";
  $numero2 -- ;
}

//tres
echo "<h3> PUNTO C </h3>";
$num3 = 1 ;

while ($num3 < 20) {
  $num3++ ;
  if ($num3 % 2 == 0) {
    echo "El numero es:" . $num3 . "<br>" ;
  }
}

//cuatro
echo "<h3> PUNTO D </h3>";
$num4 = 1 ;
$suma = 0 ;

while ($num4 <20) {
  $num4 ++;
  if ($num4%2==1) {
    echo "El numero es:" . $num4 . "<br>";
  }
}

//cinco
echo "<h3> PUNTO E </h3>";
$suma =0 ;

for ($i=1; $i < 20; $i++) {
  $suma += $i;
  echo "El numero es:" . $suma . "<br>";
}

//seis
echo "<h3> PUNTO F </h3>";
$suma2 =0 ;

for ($j=2; $j < 20; $j+= 2) {
  $suma2 += $j ;
  echo "El numero es:" . $suma2 . "<br>";
}
 ?>

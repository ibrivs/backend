<?php
//actividad A
echo "<h3>PUNTO 1-A</h3>";
$numeropar = [2,4,6,8,10,12,14,16,18,20] ;
foreach ($numeropar as $nums) {
  echo $nums . "<br>";
}

//act B
echo "<h3> PUNTO B </h3>";
$array = ["Pedro" , "Ana" , 31 , 1 ];
print_r($array);

//act C
echo "<h3>PNTO C</h3>";
$array2 = [
  "Nombre" => "Pedro",
  "Apellido" => "Torres",
  "Direccion" => "Av. Mayo 3703",
  "Numero" => "1122334455"
] ;
foreach($array2 as $clave => $valor){
    echo "<strong>".$clave.": </strong>".$valor."<br>";
}

//act D
echo "<h3>PUNTO D </h3>";
$array3 = ["Madrid", "Barcelona", "Londres", "New
York", "Los Ángeles", "Chicago"] ;
foreach ($array3 as $indice => $ciudad) {
  echo "La ciudad con el indice ". $indice . " es " . $ciudad . "<br>";
}

//act E
echo "<h3> PUNTO E </h3>";
$array4 = [
  "MD" => "Madrid",
  "BRCL" => "Barcelona",
  "LD" => "Londres",
  "NY" => "New York",
  "LA" => "Los Angeles",
  "CCG" => "Chicago"
];
foreach ($array4 as $clave => $valor) {
  echo "El indice de". $valor . " es " . $clave . "<br>";
}
?>

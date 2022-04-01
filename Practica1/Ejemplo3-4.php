<?php
$PrimerValor = 10;
$SegundoValor = 20;

$Suma = $PrimerValor + $SegundoValor;

$Resta = $PrimerValor - $SegundoValor;

$Multiplicacion = $PrimerValor * $SegundoValor;

$Division = $PrimerValor / $SegundoValor;

echo "<h1> La suma entre $PrimerValor y $SegundoValor es de $Suma </h1>";
echo "<h1> La resta entre $PrimerValor y $SegundoValor es de $Resta </h1>";
echo "<h1> La multiplicación entre $PrimerValor y $SegundoValor es de $Multiplicacion </h1>";
echo "<h1> La Division entre $PrimerValor y $SegundoValor es de $Division </h1>";
?>

<hr style="border: 5px solid green;">
<h1 style="background: blue;color: white; text-align: center;"> ESTRUCTURAS DE CONTROL </h1>

<?php
$tiempo = date("H");
if ($tiempo > "6" && $tiempo < "14")
    echo "Buenos días!";
else if ($tiempo > "14" && $tiempo < "20")
    echo "Buenas tardes!";
else 
    echo "buenas noches";

<?php include("header.php"); ?>
<p>Hola mundo </p>

<?php
$a = 10;
$b = 20;
$c = $a + $b;
echo "El resultado es: " . $c;
?>
<h3>Hola a todos menos a los que se llaman Jocsan</h3>

<?php
//for que imprima los nimeros del 1 al 10
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "<br />i= " . $i;
    }
}
?>
<?php include("footer.php"); ?>
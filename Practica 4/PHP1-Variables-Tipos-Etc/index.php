<!--Ejercicio 1 -->
<?php
function doble($i) {
 return $i*2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a) ."<br>" ;
echo gettype($b) ."<br>" ;
echo gettype($c) ."<br>" ;
echo gettype($d) ."<br>" ;
    if (is_int($d)) {
    $d += 4;
    }
if (is_string($a)) {
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g . "<br><br><br>";
?>

<!--Ejercicio 2a -->
<?php
$i = 1;
while ($i <= 10) {
    print $i++;
}
?>

<!--    -->

<?php
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
?>

<!--     -->

<?php
echo "<br><br>";
$i = 0;
do {
    print $i++;
} while ($i<10);
?>

<!--Ejercicio 2b 1 -->
<?php
for ($i = 1; $i <= 10; $i++) {
 print $i;
}
?>

<!--2 -->

<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
?>

<!--3-->

<?php
for ($i = 1; ;$i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
?>

<!--4-->

<?php
echo "<br><br>";
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}
?>
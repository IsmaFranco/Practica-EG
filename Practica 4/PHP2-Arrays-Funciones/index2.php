<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"]."<br>";
echo $matriz[12];
echo "<br><br>";
?>
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6]."<br>";
echo $matriz["unamatriz"][13]."<br>";
echo $matriz["unamatriz"]["a"];
echo "<br><br>";
?>
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
?> 
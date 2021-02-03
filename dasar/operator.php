<?php 
//operaor penggabung string ->
//.
$first_name = "Keisha";
$last_name  = "Putri";
echo $first_name. " " . $last_name;
echo "<p>";

//oprator aritmatika ->
// + - * / %
$x = 7;
$y = 2;
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo "<p>";

//operator assignment
// =, +=, -=, *=, /=, %=, .=
$x = 10;
$x /= 5;
echo $x;
echo "<br>";
$name = "Keisha";
$name .= " Putri";
echo $name;
echo "<p>";

//operator perbandingan
//<, >, <=, >=, ==, !=
//var_dump -> menampilkan informasi dari variable
var_dump(1 <= "2");
echo"<p>";
//operator identitas
// ===, !==
var_dump(1 === "1");
echo"<br>";
var_dump("1" === "1");
echo "<p>";

//logika
//&& || !
$x = 20;
// && (dan)= dua duanya hrs bener
var_dump ($x < 10 && $x % 2 == 0);
echo"<br>";
//||(atau) = salah satu bener gpp
var_dump ($x = 20 || $x % 2 == 5);
?>

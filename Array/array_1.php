<?php 
//array = variable yang menyimpan banyak nilai
//array-numerik -> key-nya meggunakan index
//cara lama 
$hari = array("Senin", "Selasa", "Rabu");
//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$random = ["Januari", 123, true];
var_dump($bulan);
echo "</p>";
//call array
echo $bulan[0];
echo "</p>";
//add array
$bulan[] = "April";
$bulan[] = "Mei";
var_dump($bulan);
//array-assosiative -> key-nya menggunakan string yang kita definisikan sendiri
?>
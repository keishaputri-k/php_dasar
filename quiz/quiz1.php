<?php 
//soal 1
$f = 1;
while($f <= 100){
    echo "$f<br>";
    $f++;
}
// soal 2 
date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if ($jam > "04.00" && $jam < "06.30"){
    $waktu = "waktu Shubuh";
}elseif ($jam >= "12.00" && $jam < "13.00") {
    $waktu = "waktu Dzuhur";
} elseif ($jam >= "15.30" && $jam < "16.30") {
    $waktu = "waktu Ashar";
}elseif ($jam >= "18.00" && $jam < "19.00") {
    $waktu = "waktu Maghrib";
}elseif ($jam >= "19.00" && $jam < "19.30"){
    $waktu = "waktu Isya";
}else{
    $waktu = "bukan waktu sholat";
}
echo "Sekarang $waktu";
echo "<br>";
//soal 3
$nilai = 85;

if ($nilai > 90 && $nilai <= 100){
    $hasil = "A";
}elseif ($nilai > 80 && $nilai <= 90) {
    $hasil = "B";
}elseif($nilai >= 70 && $nilai <= 80){
    $hasil = "C";
}
echo "Nilai zaki adalah $hasil";
?>

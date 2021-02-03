<?php 
// 6 - 10 pagi
// 11 - 14 siang
// 15 - 18 sore
// 19 - 00 malem
// 1 - 5 fajar

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if ($jam > "06.00" && $jam < "10.00"){
    $waktu = "Morning";
}elseif ($jam >= "10.00" && $jam < "14.00") {
    $waktu = "Siang";
} elseif ($jam >= "10.00" && $jam < "18.00") {
    $waktu = "Sore";
}elseif ($jam >= "18.00" && $jam < "00.00") {
    $waktu = "Malam";
}else {
    $waktu = "Fajar";
}
echo "Selamat $waktu , Kei"
?>
<?php 
// function = sekumpulan informasi yang dibungkus dalam sebuah blok
function biodata(){
    echo "Keisha<br>";
    echo "X RPL<br>";
    echo "21 May 2005<br>";
}
biodata();
echo "<p>";

//date -> menampilkan tanggal dengan format tertentu
/* 
l = nama hari lengkap = Wednesday
D = nama hari singkat = Wed
d = tanggal = 18
m = bulan(angka) = 05
y = tahun singkat = 21
M = bulan (text, singkat) = Jun
F = bulan (text, panjang) = Juni
Y = tahun lengkap = 2021
s = detik
H = jam
i = menit
*/
date_default_timezone_set("Asia/Jakarta");
echo date("l, d m y");
echo "<br>";
echo date("l, d M Y");
echo "<br>";
echo date("H:i:s");
echo "<p>";

//time -> detik yang sudah berlalu sejak 1970
echo time();
echo "<br>";
echo date("l, d M Y", time() + 60 * 60 * 24 * 1000);
echo "<br>";
//srttotime = string ke waktu
echo date("l", strtotime("21 May 2005"));
?>
<?php
/* Variable Super Global (variable dari php)
 - tipe datanya array assosiative
    $_Get
    $_POST
    $_REQUEST
    $_COOKIE
    $_SESSION
    $_SERVER
    $_ENV
    $GLOBALS
*/
//var_dump($_SERVER);

//GET($_GET) => ngirim data lewat url(tdk rahasia)

//POST ($_POST) => ngirim data lewat form

//echo $_GET["nama"]= "Keisha";
echo "<br>";
var_dump($_GET);

$mahasiswa= [
    ["nama" => "Keisha",
    "jurusan" =>"Tehnik Penerbangan",
    "nim" => "90489023312",
    "email" => "pkeisha47@gmail.com"],
    
    ["nama" => "Louis",
    "jurusan" => "Tehnik Informatika",
    "nim" => "90283827913",
    "email" => "louispartidge@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs):?>
        <li>
            <a href="latihan_2.php?nama=<?= $mhs["nama"];?>
                &jurusan=<?= $mhs["jurusan"];?>
                &nim=<?= $mhs["nim"];?>
                &email=<?= $mhs["email"];?>"
                >
                <?= $mhs["nama"];?>
            </a>
        </li>
    <?php endforeach;?>
</body>
</html>
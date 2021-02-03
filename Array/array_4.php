<?php
//array assosiative multidimenson 
$mahasiswa= [
    ["nama" => "Keisha",
    "jurusan" =>"Tehnik Penerbangan",
    "nim" => "90489023312",
    "email" => "pkeisha47@gmail.com"],

    ["jurusan" => "Hukum",
    "nama" => "Harvey",
    "nim" => "23892399183",
    "email" =>"harveycantwell@gmail.com"],

    ["nama" => "Louis",
    "nim" => "90283827913",
    "jurusan" => "Tehnik Informatika",
    "email" => "louispartidge@gmail.com"]
];
echo $mahasiswa[0]["email"];
echo "<p>";
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
    <?php foreach($mahasiswa as $m):?>
        <ul>
            <li><?= $m["nama"]?></li>
            <li><?= $m["nim"]?></li>
            <li><?= $m["jurusan"]?></li>
            <li><?= $m["email"]?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>
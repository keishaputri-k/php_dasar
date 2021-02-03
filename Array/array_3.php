<?php
//array di dalam array
//array multidimension
//array multidimension numerik
$mahasiswa= [
    ["Keisha", "90489023312", "Tehnik Penerbangan", "pkeisha47@gmail.com"],
    ["Harvey", "23892399183", "Hukum", "harveycantwell@gmail.com"],
    ["Louis", "90283827913", "Tehnik Informatika", "louispartidge@gmail.com"]
];
//nyetak email louis
echo $mahasiswa[2][3];
echo "<br>";
//nyetak nama harvey
echo $mahasiswa[1][0]
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
    <!-- List -->
    <ul>
    <?php foreach($mahasiswa as $m):?>
        <li>Nama: <?= $m[0]?></li>
        <li>NIM: <?= $m[1]?></li>
        <li>Jurusan: <?= $m[2]?></li>
        <li>Email: <?= $m[3]?></li>
        <br>
    <?php endforeach;?>
    </ul>

    <?php foreach($mahasiswa as $ms):?>
    <br>
        <?php foreach ($ms as $m):?>
            <div><?= $m?></div>
        <?php endforeach;?>
    <?php endforeach;?>
</body>
</html>
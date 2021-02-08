<?php
//array numerik multidimension
$siswa= [
    ["Ivan", "XI-D", "RPL", "ivanmartinez@gmail.com"],
    ["Emilio", "XI-B", "TKJ", "emiliomartinez@gmail.com"],
    ["Boggi", "XI-D", "RPL", "justboggi@gmail.com"]
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
    <!-- List -->
    <ul>
    <?php foreach($siswa as $m):?>
        <li>Nama: <?= $m[0]?></li>
        <li>Kelas: <?= $m[1]?></li>
        <li>Jurusan: <?= $m[2]?></li>
        <li>Email: <?= $m[3]?></li>
        <br>
    <?php endforeach;?>
    </ul>

    <?php foreach($siswa as $ms):?>
    <br>
        <?php foreach ($ms as $m):?>
            <div><?= $m?></div>
        <?php endforeach;?>
    <?php endforeach;?>
</body>
</html>

<?php
//array assosiative multidimenson 
$mahasiswa= [
    ["nama" => "Ivan",
    "kelas" =>"XI-D",
    "Jurusan" => "RPL",
    "email" => "ivanmartinez@gmail.com"],

    ["kelas" => "XI-B",
    "nama" => "Emilio",
    "Jurusan" => "TKJ",
    "email" =>"emiliomartinez@gmail.com"],

    ["nama" => "Boggi",
    "jurusan" => "RPL",
    "kelas" => "XI-D",
    "email" => "justboggi@gmail.com"]
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
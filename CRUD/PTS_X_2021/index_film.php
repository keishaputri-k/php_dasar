<?php
require 'functions_film.php';
//ambil data dr table
$film = get("SELECT * FROM tb_film");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Film</h1>
    <a href="tambah_film.php">Tambah Data Film</a>
    <p>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Poster</th>
            <th>Movie Name</th>
            <th>Genre</th>
            <th>Director</th>
            <th>Production</th>
            <th>IMDB</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($film as $row):?>
        <tr>
            <td><?=$i?></td>
            <td>
                <a href="ubah_film.php? id=<?= $row["id_film"];?>">Ubah</a> |
                <a href="hapus_film.php? id=<?= $row["id_film"];?>">Hapus</a>
            </td>
            <td><img src="img/<?=$row["poster_film"];?>" width="50"></td>
            <td><?=$row["name_film"];?></td>
            <td><?=$row["genre_film"];?></td>
            <td><?=$row["director_film"];?></td>
            <td><?=$row["production_film"];?></td>
            <td><?=$row["imdb_film"];?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach;?>
        
    </table>
</body>

</html>
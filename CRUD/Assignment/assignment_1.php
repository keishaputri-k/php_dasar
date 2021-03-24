<?php
require 'functions_ass1.php';
//ambil data dr table
$movie = get("SELECT * FROM tb_movie");
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
<h1>Movies</h1>
    <a href="tambah_ass1.php">Add Movie</a>
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
        <?php foreach($movie as $row):?>
        <tr>
            <td><?=$i?></td>
            <td>
                <a href="ubah_ass1.php? id=<?= $row["id_movie"];?>">Ubah</a> |
                <a href="hapus_ass1.php? id=<?= $row["id_movie"];?>">Hapus</a>
            </td>
            <td><img src="img/<?=$row["poster_movie"];?>" width="50"></td>
            <td><?=$row["name_movie"];?></td>
            <td><?=$row["genre_movie"];?></td>
            <td><?=$row["director_movie"];?></td>
            <td><?=$row["distributor_movie"];?></td>
            <td><?=$row["imdb_movie"];?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach;?>
        
    </table>
</body>

</html>
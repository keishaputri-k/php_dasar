<?php
require 'functions_film.php';
$id = $_GET["id"];
$film = get ("SELECT * FROM tb_film WHERE id_film = $id")[0];
if(isset($_POST["submit"])){
   if(ubah($_POST) > 0){
       //kalo success
       echo "
        <script>
        alert('data berhasil di Ubah!');
        document.location.href = 'index_film.php';
        </script>
       ";
   }else{
    //klo gagal
    echo "
        <script>
        alert('data gagal di Ubah!');
        </script>
       ";
   }
   $db = mysqli_connect("localhost", "root", "", "db_phpdasar");
   echo mysqli_error($db);
}
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
    <h1> Ubah Data Film</h1>
    <form action="" method="post">
        <input type="hidden" name="id_film" value="<?= $film["id_film"]?>"></input>
        <label for="poster_film">Poster : </label>
        <input type="text" name="poster_film" id="poster_film" required value="<?= $film["poster_film"];?>"></input>
        <p>
        <label for="name_film">Name : </label>
        <input type="text" name="name_film" id="namefilm" required value="<?= $film["name_film"];?>"></input>
        <p>
        <label for="genre_film">Genre : </label>
        <input type="text" name="genre_film" id="genre_film" required value="<?= $film["genre_film"];?>"></input>
        <p>
        <label for="director_film">Director : </label>
        <input type="text" name="director_film" id="director_film" required value="<?= $film["director_film"];?>"></input>
        <p>
        <label for="production_film">Production : </label>
        <input type="text" name="production_film" id="production_film" required value="<?= $film["production_film"];?>"></input>
        <p>
        <label for="imdb_film">Imdb : </label>
        <input type="text" name="imdb_film" id="imdb_film" required value="<?= $film["imdb_film"];?>"></input>
        <p>
        <button type="submit" name="submit"> Submit </button>
    </form>
    </body>
</html>
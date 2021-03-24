<?php
require 'functions_ass1.php';
$id = $_GET["id"];
$movie = get ("SELECT * FROM tb_movie WHERE id_movie = $id")[0];
if(isset($_POST["submit"])){
   if(ubah($_POST) > 0){
       //kalo success
       echo "
        <script>
        alert('data berhasil di Ubah!');
        document.location.href = 'assignment_1.php';
        </script>
       ";
   }else{
    //klo gagal
    echo "
        <script>
        alert('data gagal di Ubah!');
        document.location.href = 'assignment_1.php';
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
    <h1> Ubah Data movie</h1>
    <form action="" method="post">
        <input type="hidden" name="id_movie" value="<?= $movie["id_movie"]?>"></input>
        <label for="poster_movie">Poster : </label>
        <input type="text" name="poster_movie" id="poster_movie" required value="<?= $movie["poster_movie"];?>"></input>
        <p>
        <label for="name_movie">Name : </label>
        <input type="text" name="name_movie" id="namemovie" required value="<?= $movie["name_movie"];?>"></input>
        <p>
        <label for="genre_movie">Genre : </label>
        <input type="text" name="genre_movie" id="genre_movie" required value="<?= $movie["genre_movie"];?>"></input>
        <p>
        <label for="director_movie">Director : </label>
        <input type="text" name="director_movie" id="director_movie" required value="<?= $movie["director_movie"];?>"></input>
        <p>
        <label for="distributor_movie">Production : </label>
        <input type="text" name="distributor_movie" id="distributor_movie" required value="<?= $movie["distributor_movie"];?>"></input>
        <p>
        <label for="imdb_movie">Imdb : </label>
        <input type="text" name="imdb_movie" id="imdb_movie" required value="<?= $movie["imdb_movie"];?>"></input>
        <p>
        <button type="submit" name="submit"> Submit </button>
    </form>
    </body>
</html>
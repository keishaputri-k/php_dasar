<?php
require 'functions_film.php';
//cek apakah tombol submit sudah di klik atau belum
if(isset($_POST["submit"])){
   if(tambah($_POST) > 0){
       //kalo success
       echo "
        <script>
        alert('data berhasil di tambahkan!');
        document.location.href = 'index_film.php';
        </script>
       ";
   }else{
    //klo gagal
    echo "
        <script>
        alert('data gagal di tambahkan!');
        document.location.href = 'index_film.php';
        </script>
       ";
   }
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
    <h1> Tambah Data Film</h1>
    <form action="" method="post">
        <label for="poster_film">Poster : </label>
        <input type="text" name="poster_film" id="poster_film" required></input>
        <p>
        <label for="name_film">Name : </label>
        <input type="text" name="name_film" id="name_film" required></input>
        <p>
        <label for="genre_film">Genre : </label>
        <input type="text" name="genre_film" id="genre_film" required></input>
        <p>
        <label for="director_film">Director : </label>
        <input type="text" name="director_film" id="director_film" required></input>
        <p>
        <label for="production_film">Production : </label>
        <input type="text" name="production_film" id="production_film" required></input>
        <p>
        <label for="imdb_film">IMDB : </label>
        <input type="text" name="imdb_film" id="imdb_film" required></input>
        <p>
        <button type="submit" name="submit"> Submit </button>
    </form>
    </body>
</html>
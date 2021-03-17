<?php
require 'functions_ass1.php';
//cek apakah tombol submit sudah di klik atau belum
if(isset($_POST["submit"])){
   if(tambah($_POST) > 0){
       //kalo success
       echo "
        <script>
        alert('data berhasil di tambahkan!');
        document.location.href = 'assignment_1.php';
        </script>
       ";
   }else{
    //klo gagal
    echo "
        <script>
        alert('data gagal di tambahkan!');
        document.location.href = 'assignment_1.php';
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
    <h1>Add Movie</h1>
    <form action="" method="post">
        <label for="poster_movie">Poster : </label>
        <input type="text" name="poster_movie" id="poster_movie" required></input>
        <p>
        <label for="name_movie">Name : </label>
        <input type="text" name="name_movie" id="name_movie" required></input>
        <p>
        <label for="genre_movie">Genre : </label>
        <input type="text" name="genre_movie" id="genre_movie" required></input>
        <p>
        <label for="director_movie">Director : </label>
        <input type="text" name="director_movie" id="director_movie" required></input>
        <p>
        <label for="distributor_movie">Production : </label>
        <input type="text" name="distributor_movie" id="distributor_movie" required></input>
        <p>
        <label for="imdb_movie">IMDB : </label>
        <input type="text" name="imdb_movie" id="imdb_movie" required></input>
        <p>
        <button type="submit" name="submit"> Submit </button>
    </form>
    </body>
</html>
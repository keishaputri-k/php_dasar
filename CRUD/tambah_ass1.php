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
        <label for="poster_siswa">Poster : </label>
        <input type="text" name="poster_siswa" id="poster_siswa" required></input>
        <p>
        <label for="name_siswa">Name : </label>
        <input type="text" name="name_siswa" id="name_siswa" required></input>
        <p>
        <label for="genre_siswa">Genre : </label>
        <input type="text" name="genre_siswa" id="genre_siswa" required></input>
        <p>
        <label for="director_siswa">Director : </label>
        <input type="text" name="director_siswa" id="director_siswa" required></input>
        <p>
        <label for="distributor_siswa">Production : </label>
        <input type="text" name="distributor_siswa" id="distributor_siswa" required></input>
        <p>
        <label for="imdb_siswa">IMDB : </label>
        <input type="text" name="imdb_siswa" id="imdb_siswa" required></input>
        <p>
        <button type="submit" name="submit"> Submit </button>
    </form>
    </body>
</html>
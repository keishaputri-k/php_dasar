<?php 
require 'functions_film.php';
$id = $_GET["id"];
    if(hapus($id) > 0){
        echo "
        <script>
        alert('data berhasil di hapus!');
        document.location.href = 'index_film.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal di hapus!');
        document.location.href = 'index_film.php';
        </script>
        ";
    }

?>
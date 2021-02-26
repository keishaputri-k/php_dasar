<?php 
//koneksi ke database
//(host, user, password, namadatabase)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function tambah($post){
    global $db;
    //ambil data dr tiap elemendalam form
    $poster = $post["poster_movie"];
    $name = $post["name_movie"];
    $genre = $post["genre_movie"];
    $director = $post["director_movie"];
    $distributor = $post["distributor_movie"];
    $imdb = $post["imdb_movie"];


    //query insert data
    $query = "INSERT INTO tb_movie VALUES( null, '$poster', '$name', '$genre', '$director', '$distributor', '$imdb')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
?>
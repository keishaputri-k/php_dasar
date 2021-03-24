<?php 
//koneksi ke database
//(host, user, password, namadatabase)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function get($query){
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
    //ambil data dr tiap elemen dalam form
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
function hapus($id){
    global $db;
    $delete = "DELETE FROM tb_movie WHERE id_movie = $id";
    mysqli_query($db, $delete);
    return mysqli_affected_rows($db);
}
function ubah($data){
    global $db;
    //ambil data dr tiap elemendalam form
    $id = $data["id_movie"];
    $poster = $data["poster_movie"];
    $name = $data["name_movie"];
    $genre = $data["genre_movie"];
    $director = $data["director_movie"];
    $distributor = $data["distributor_movie"];
    $imdb = $data["imdb_movie"];
    
    $query = "UPDATE tb_movie SET 
    poster_movie = '$poster',
    name_movie = '$name',
    genre_movie = '$genre',
    director_movie = '$director',
    distributor_movie = '$distributor',
    imdb_movie = '$imdb'
    WHERE id_movie = $id
    ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
?>
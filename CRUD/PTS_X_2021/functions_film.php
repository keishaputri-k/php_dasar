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
    //ambil data dr tiap elemendalam form
    $poster = $post["poster_film"];
    $name = $post["name_film"];
    $genre = $post["genre_film"];
    $director = $post["director_film"];
    $production = $post["production_film"];
    $imdb = $post["imdb_film"];

    //query insert data
    $query = "INSERT INTO tb_film VALUES( null, '$poster', '$name', '$genre', '$director', '$production', '$imdb')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;
    $delete = "DELETE FROM tb_film WHERE id_film = $id";
    mysqli_query($db, $delete);
    return mysqli_affected_rows($db);
}
function ubah($data){
    global $db;
    //ambil data dr tiap elemendalam form
    $id = $data["id_film"];
    $poster = $data["poster_film"];
    $name = $data["name_film"];
    $genre = $data["genre_film"];
    $director = $data["director_film"];
    $production = $data["production_film"];
    $imdb = $data["imdb_film"];
    
    $query = "UPDATE tb_film SET 
    poster_film = '$poster',
    name_film = '$name',
    genre_film = '$genre',
    director_film = '$director',
    production_film = '$production',
    imdb_film = '$imdb'
    WHERE id_film = $id
    ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
?>
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
    $nama = $post["nama_siswa"];
    $gambar = $post["gambar_siswa"];
    $kelas = $post["kelas_siswa"];
    $email = $post["email_siswa"];

    //query insert data
    $query = "INSERT INTO tb_siswa VALUES( null, '$gambar', '$nama', '$kelas', '$email')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;
    $delete = "DELETE FROM tb_siswa WHERE id_siswa = $id";
    mysqli_query($db, $delete);
    return mysqli_affected_rows($db);
}
function ubah($data){
    global $db;
    //ambil data dr tiap elemendalam form
    $id = $data["id_siswa"];
    $nama = $data["nama_siswa"];
    $gambar = $data["gambar_siswa"];
    $kelas = $data["kelas_siswa"];
    $email = $data["email_siswa"];
    
    $query = "UPDATE tb_siswa SET 
    gambar_siswa = '$gambar',
    nama_siswa = '$nama',
    kelas_siswa = '$kelas',
    email_siswa = '$email'
    WHERE id_siswa = $id
    ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
?>
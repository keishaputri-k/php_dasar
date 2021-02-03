<?php
if( !isset($_POST["name"])){
        //untuk relokasi ke halaman lain
        header("Location: latihan1.php");
        exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang <?= $_POST["name"]?></h1>
</body>
</html>
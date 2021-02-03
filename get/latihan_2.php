<?php
//isset -> untuk mengecek adanya variable
if( !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["email"])
    ){
        //untuk relokasi ke halaman lain
        header("Location: latihan_1.php");
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
    <ul>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["jurusan"];?></li>
        <li><?= $_GET["nim"];?></li>
        <li><?= $_GET["email"];?></li>
    </ul>
    <a href="latihan_1.php">Back</a>
</body>
</html>
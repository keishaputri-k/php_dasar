<?php
//cek apakah tombol submit sudah di click atau belom
if (isset($_POST["submit"])){
    //cek username dan password
    if($_POST["username"] == "admin" && $_POST["password"] == "123456"){
        //jika benar, redirect to admin page
        header("Location: admin.php");
        exit;
    }else{
        $error = true;
    }
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
    <form action="" method="post">
    <label for="username">username : </label>
    <input type="text" name="username" id="username">
    <p>
    <label for="password">password : </label>
    <input type="text" name="password" id="password">
    <p>
    <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
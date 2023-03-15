<?php
require 'functions.php';
if (isset($_POST["register"])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
            alert('user baru berhasil ditambahkan');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    
    <form action="" method="post">
        <h1>Halaman registrasi</h1>
        <ul>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password">
            </li>
            <li>
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2">
            </li>
            <li>
                <label for="password2">nim :</label>
                <input type="text" name="nim">
            </li>
            <li>
                <label for="password2">nama :</label>
                <input type="text" name="nama">
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
        </ul>
    </form>
</body>
</html>
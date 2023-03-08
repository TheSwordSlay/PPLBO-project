<?php
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "absensi");

function submitAbsen ($data) {
    //ambil data dari input form
    global $conn;
    $namaMa = $data["namaMa"];
    $nim = $data["nim"];
    $kehadiran = $data["kehadiran"];
    $tanggal = $data["tanggal"];

    //query insert data
    $query = "INSERT INTO pplbo VALUES (
        '$namaMa',
        '$nim',
        '$kehadiran',
        CURRENT_DATE()
        )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

if( isset($_POST["submit"]) ) {
    //cek apakah data berhasil di tambahkan atau tidak
    if( submitAbsen($_POST) > 0 ) {
        echo "
            <script>
                alert('Absen berhasil')
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('absen gagal :(');
                document.location.href = 'index.php';
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
    <title>Absensi Pengembangan Perangkat Lunak Berorientasi Objek</title>
</head>
<body>
<form action="" method="post">
        <ul>
            <li>
                <label for="namaMa">Nama</label>
                <input type="text" name="namaMa" id="namaMa" required>
            </li>
            <li>
                <label for="nim">Nim</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="kehadiran">Kehadiran</label>
                <input type="text" name="kehadiran" id="kehadiran" required>
            </li>
        </ul>
        <button type="submit" name="submit">Submit absen!</button>
    </form>
</body>
</html>
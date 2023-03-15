<?php
$conn = mysqli_connect("localhost", "root", "", "tiregc");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data) {
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $nim = strtolower(stripslashes($data["nim"]));
    $nama = strtolower(stripslashes($data["nama"]));

    //cek username udh ada ato blom
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username udah ada')
        </script>";
        return false;
    }

    //cek password sama dk yg konfir
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sama');
        </script>";
        return false;
    }

    //enkripsi
    $password = password_hash($password, PASSWORD_DEFAULT);

    //masukkin data baru ke user
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password', '$nim', '$nama')");
    return mysqli_affected_rows($conn);
}

?>
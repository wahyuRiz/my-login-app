<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartdoor";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari permintaan POST
$username = $_POST["username"];
$password = $_POST["password"];

// Lakukan validasi login
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login berhasil
    echo "success";
} else {
    // Login gagal
    echo "failure";
}

$conn->close();
?>

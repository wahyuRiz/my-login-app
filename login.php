<?php
// Koneksi ke database
$servername = "aws.connect.psdb.cloud";
$username = "udcamw6qftcc9wusaq6l";
$password = "pscale_pw_3aGRNJvXzHvHajjGG3jsHOBinUWeEHrdGbeiBL7O1mT";
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

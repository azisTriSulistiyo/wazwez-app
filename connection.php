<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wazwez";


// Untuk koneksi ke database
$conn = new mysqli($servername, $username,$password, $dbname);

// Cek koneksi error
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
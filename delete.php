<?php
// koneksi ke database connection file
require "connection.php";
 
// Get Id dari url delete di index.php
$id = $_GET['id'];
 
// Query delete task berdasarkan task_id
$result = mysqli_query($mysqli, "DELETE FROM task WHERE task_id=$id");
 
// Setelah delete, redirect ke tampilan index.php
header("Location:index.php");
?>
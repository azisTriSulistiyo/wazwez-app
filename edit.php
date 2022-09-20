<?php
//koneksi ke database di file connection.php
require "connection.php";
 
// cek jika tombol untuk update diklik
if(isset($_POST['update'])){	
    $id = $_POST['id'];
    $name=$_POST['name_task'];
    
    // update nama task
    $result = mysqli_query($mysqli, "UPDATE task SET name_taks ='$name' WHERE task_id=$id");
    
    // Redirect ke index.php ketika proses update selesai
    header("Location: index.php");
}
?>
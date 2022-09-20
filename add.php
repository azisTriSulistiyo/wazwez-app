<?php
//koneksi ke database di file connection.php
require "connection.php";
 
//jalankan query jika tombol submit diklik
if (isset($_POST['submit'])) {
    //Query untuk memasukkan nama tugas,deskripsi dan due_date
    $sql4 = "INSERT INTO task (`name_task`, `description`, `due_date`, `student_id`) 
    VALUES ('{$_POST['name_task']}', '{$_POST['description']}', '{$_POST['due_date']}', 1)";
    $result4 = $conn->query($sql4);
    if($result4===true){
        $result;
    }

    header("Location: index.php");

}
?>
<?php 
//koneksi ke database di file connection.php
require "connection.php";

//Query untuk menampilkan nama task,deskripsi,due_date 
$sql = "SELECT task_id, name_task, description, date_format(due_date, '%d %M %Y') as date FROM task where is_finished=0 and student_id = 1";
$result = $conn->query($sql);
  
//Query untuk menampilkan nama task yg sudah terselesaikan
$sql2 = "SELECT task_id, name_task FROM task WHERE is_finished = 1 and student_id = 1";
$result2 = $conn->query($sql2);

//Query untuk menampilkan nama subtask berdasarkan tas_id tertentu
$sql3 = "SELECT subtask_id, name_subtask from subtask WHERE task_id = 1;";
$result3 = $conn->query($sql3);

//Query untuk menampilkan nama dan foto profil berdasarkan user_id
$sql5 = "SELECT name, photo_profile_link from student WHERE user_id = 1";
$result5 = $conn->query($sql5);
?>
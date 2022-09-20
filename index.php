<?php
// Koneksi ke database
include_once "connection.php";
require "select.php";

// Fetch all users data from database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>
    <body>

    `<form id="wazwez" action="" method="post">  

    <div class="header">
        <nav>
            <div class="logo">waz<span style="color:#FF5F26;">wez</span>.</div>
            <ul>
               <li> <img src="./assets/Notification.svg" style="padding-bottom: 10px";> </li>
               <!-- menampilkan nama dan foto profil berdasarkan userId yg login -->
                <?php 
                    $data = mysqli_fetch_assoc($result5);
                    echo '<li><img src="'.$data['photo_profile_link'].'"></li>';
                    echo '<li><p>'.$data['name'].'</p></li>';
                ?> 
                <li><img src="./assets/Arrow - Down 2.svg" alt=""></li>
            </ul>
        </nav>
    </div>
    <div class="body-box">
        <div class="col">
            <h2>MY TASKS</h2>
            <div class="row">
                <h1>To Do List</h1>
                <a href="#" id="tambahTugas"><img src="./assets/CTA.svg" alt=""></a>
            </div>
                <p class="tugas">Buat list tugas harian saya</p>
            <div class="row">
                <h3>Sort By</h3>
                <a href="#" class="frameTanggal" id="tanggalOrange" ><img src="./assets/Dropdown.svg" alt=""></a>
                <a href="#" class="frame" id="tanggalAbu"><img  src="./assets/Frame 58.svg" alt=""></a>
            </div>

            <!-- Tampilan untuk insert tugas -->
            <div id="contentId" class="content">
                <div class="row-add">
                    <img src="./assets/Rectangle 21.svg" alt="">
                    <input class="selesai" type="text" name="name_task" placeholder="Masukan Nama Tugas">
                </div>
                <div class="row-add" style="margin-left:44px;" >
                    <img src="./assets/menu.svg" alt="">
                    <input class="opsi" type="text" name="description" placeholder="Deskripsi Tugas (Optional)">
                </div>
                <div class="row-add" style="margin-left:7px;width:411px;">
                    <div class="date">
                        <img src="./assets/Calendar.svg" alt="">
                        <input class="opsi" type="date" name="due_date" placeholder="Tanggal & Waktu)">
                    </div>
                    <input type="submit" class="submit" value="Submit" name="submit">  

                </div>
            </div>

            <!-- Untuk menampilkan daftar task yg belum selesai -->
                <?php foreach($result as $value):?>
                        <div class="row-product" style="margin-left: 42px;">
                        <div class="col-product">
                        <label class="container">
                        <input type="checkbox"><label> <?=$value["name_task"] ?></label>
                        <span class="checkmark"></span>
                        </label>
                        <h4 class="hari"><?= $value["date"] ?></h4>
                        <a href="#" id="updateTask-<?= $value['task_id']?>" class="hidden"><img src="./assets/titiktiga.svg" alt="" class="titikTiga"></a>
                        </div>
                        <a href="#" id="subTask1"><img src="./assets/Arrow - Down 2.svg" alt=""></a>
                        </div>
                        <p class="isi"><?=$value["description"] ?></p>

                    <!-- Untuk menampilkan sub task berdasarkan task id yg diminta -->
                        <div id="subTaskView-<?= $value['task_id']?>" class="subtask hidden" >
                            <div class="title-subtask">
                                <p>Subtask</p>
                                <img src="./assets/Frame 55.svg" alt="">
                            </div>
                            <div class="list-subtask" style="padding-left: 10px;">
                                <?php
                                    foreach($result3 as $subtask){
                                        echo '<div class="row-product">';
                                        echo '<div cass="col-product">';
                                        echo '<label class="container">';
                                        echo '<input type="checkbox"><label>'. $subtask["name_subtask"]. '</label>';
                                        echo '<span class="checkmark"></span>';
                                        echo '</label>';
                                        echo '</div>';
                                        echo '<img src="./assets/Vector.svg" alt="">';
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                <?php endforeach; ?>    

            <!-- untuk rename dan delete task -->
            <div id="updateId-<?= $value['task_id']?>" class="updateData hidden">
                    <div class="update">
                        <img src="./assets/Edit.svg" alt="">
                        <label><a href="edit.php?id= <?=$value['task_id']?>">Rename task</a></label>
                    </div>
                    <div class="update">
                        <img src="./assets/Delete.svg" alt="">
                        <label><a href="delete.php?id= <?=$value['task_id']?>" onclick="return confirm('Anda yakin ingin menghapus task ini?')">Delete task</a></label>
                    </div>    
            </div>

            <!-- Untuk menampilkan filter sort by -->
                <div id="tanggalId" class="pilihan">
                    <div class="option">
                        <input type="radio" id="check1" name="radio"/>
                        <label for="check1">By Tanggal</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="check2" name="radio"/>
                        <label for="check2">By Time</label>
                    </div>  
                    <div class="option">
                        <input type="radio" id="check3" name="radio"/>
                        <label for="check3">Terbaru</label>
                    </div>  
                </div> 
        
                <!-- Untuk menampilkan task yang sudah terselesaikan -->
                <div class="bawah">
                    <div class="row-selesai" id="terselesaikan" style= "width: 291px">
                        <img src="./assets/Arrow - Right 2.svg" alt="">
                        <h4 class="selesai" style="color:#7A7F83;">Terselesaikan (3 tugas)</h4>
                    </div>
                    <div class="tasknew" id="selesaiId" >
                        <?php
                            foreach($result2 as $a){
                                echo '<div class="row-terselesaikan">';
                                echo '<div class="col-product">';
                                    echo '<label class="container">';
                                    echo '<input type="checkbox" id="terselesaikan1" ><label>' .$a["name_task"] .'</label>';
                                    echo '<span class="checkmark"></span>';
                                echo '</label>';
                                echo '</div>';
                                echo '<img src="./assets/Arrow - Down 2.svg" alt="">';
                                echo '</div>'; 
                                }
                        ?>
                    </div>
                </div>
        
        </div>
            
    </div>

    </form>
    <script src="./js/script.js"></script>
    
</body>
</html>
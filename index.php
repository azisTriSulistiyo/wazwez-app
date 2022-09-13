<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wazwez";


// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name_task, description, date_format(due_date, '%d %M %Y') as date FROM task where is_finished=0 ";
$result = $conn->query($sql);

$sql2 = "SELECT name_task FROM task WHERE is_finished = 1";
$result2 = $conn->query($sql2);


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
    <div class="header">
        <nav>
            <div class="logo">waz<span style="color:#FF5F26;">wez</span>.</div>
            <!-- <img src="../assets/Logo.svg"> -->
            <ul>
                <li>
                    <img src="./assets/Notification.svg" style="
                    padding-bottom: 10px";>
                </li>
                <li>
                    <img src="./assets/User Profile.svg">
                </li>
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
        <div id="contentId" class="content">
            <div class="row-product" style= "width: 345px;">
                <img src="./assets/Rectangle 21.svg" alt="">
                <input class="selesai" type="text" id="namaTugas" name="namaTugas" placeholder="Masukan Nama Tugas">
            </div>
            <div class="row-product" style= "width: 340px; margin-left: 38px; " >
                <img src="./assets/menu.svg" alt="">
                <input class="opsi" type="text" id="namaTugas" name="namaTugas" placeholder="Deskripsi Tugas (Optional)">
            </div>
            <div class="row-product" style= "width: 340px; margin-left: 38px;">
                <img src="./assets/Calendar.svg" alt="">
                <input class="opsi" type="text" id="namaTugas" name="namaTugas" placeholder="Tanggal & Waktu)">
            </div>
            
        </div>
        <?php
            foreach($result as $value){
                echo '<div class="row-product">';
                echo '<div class="col-product">' ;
                echo '<input type="radio" id="checkproduct1" name="radio"/>' ;
                echo '<label class="product" for="checkproduct1">'. $value["name_task"] .'</label>' ;
                echo '<h4 class="hari">'. $value["date"] .'</h4>' ;
                echo '</div>'  ;
                echo '<a href="#" id="subTask"><img src="./assets/Arrow - Down 2.svg" alt=""></a>';
                echo '</div>' ;
                echo '<p class="isi">'.$value["description"] .'</p>';
            }
        ?>
        
        <div id="subTaskView" class="subtask hidden" >
            <div class="title-subtask">
                <p>Subtask</p>
                <img src="./assets/Frame 55.svg" alt="">
            </div>
            <div class="list-subtask" style="padding-left: 10px;">
                <div class="row-product">
                    <div class="col-product" style="width: 203px;">
                        <label class="container">
                            <input type="checkbox"><label>Design review</label>
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <img src="./assets/Vector.svg" alt="">
                </div>
                <div class="row-product">
                    <div class="col-product" style="width: 246px;">
                        <label class="container">
                            <input type="checkbox"><label>Low-Fidelity design</label>
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <img src="./assets/Vector.svg" alt="">
                </div>
                <div class="row-product">
                    <div class="col-product" style="width: 250px;">
                        <label class="container">
                            <input type="checkbox"><label>High-Fidelity design</label>
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <img src="./assets/Vector.svg" alt="">
                </div>
                <div class="row-product">
                    <div class="col-product" style="width: 236px;">
                        <label class="container">
                            <input type="checkbox"><label>Design Guidelines</label>
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <img src="./assets/Vector.svg" alt="">
                </div>

                
            </div>
        </div>
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
<script src="./js/script.js"></script>

</body>
</html>
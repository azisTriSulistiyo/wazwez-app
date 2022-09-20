//JS untuk menampilkan kolom tambah tugas
document.getElementById("tambahTugas").onclick = function() {myFunction()};

function myFunction() {
  document.getElementById("contentId").classList.toggle("show");
}


//JS untuk menampilkan kolom sort by tanggal
document.getElementById("tanggalOrange").onclick = function() {myFunctionTanggal()};

function myFunctionTanggal() {
  document.getElementById("tanggalId").classList.add("show");
  document.getElementById("tanggalAbu").classList.add("show");
  document.getElementById("tanggalOrange").classList.add("hidden");
}

document.getElementById("tanggalAbu").onclick = function() {myFunctionTanggal2()};

function myFunctionTanggal2() {
  document.getElementById("tanggalId").classList.remove("show");
  document.getElementById("tanggalAbu").classList.remove("show");
  document.getElementById("tanggalOrange").classList.remove("hidden");

}


//JS untuk menampilkan kolom tugas yg terselesaikan
document.getElementById("terselesaikan").onclick = function() {myFunctionSelesai()};

function myFunctionSelesai(){
  document.getElementById("selesaiId").classList.toggle("show");
}

//JS untuk menampilkan subtask
let idm = document.getElementsByTagName("subTask")[0].id;
console.log(idm);

document.getElementById("subTask-"+id).onclick = function() {myFunctionSubtask()};

function myFunctionSubtask(){
  document.getElementById("subTaskView-"+id).classList.toggle("show");
  document.getElementById("updateTask-"+id).classList.toggle("show");
}

//JS untuk menampilkan kolom untuk rename dan delete task
document.getElementById("updateTask-"+id).onclick = function() {myFunctionUpdate()};

function myFunctionUpdate(){
  document.getElementById("updateId-"+id).classList.toggle("show");
}

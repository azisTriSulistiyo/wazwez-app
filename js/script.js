document.getElementById("tambahTugas").onclick = function() {myFunction()};

function myFunction() {
  document.getElementById("contentId").classList.toggle("show");
}

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

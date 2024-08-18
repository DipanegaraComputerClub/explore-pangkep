document.getElementById("submit-button").addEventListener("click", function () {
  var form = document.getElementById("booking-form");
  var formData = new FormData(form);

  // Buat request menggunakan fetch
  fetch("./Admin/proses_pesananUser/tambah_data_pesanan.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      alert("Data pesanan Berhasil Ditambahkan");
      window.location.href = "../../index.php";
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("Gagal menambahkan data pesanan");
    });
});

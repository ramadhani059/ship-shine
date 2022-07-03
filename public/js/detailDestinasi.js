let harga = document.getElementById("harga").textContent;
let anak = document.getElementById("anak");
let dewasa = document.getElementById("dewasa");
let totalHarga = document.getElementById("total-harga");
let totalPenumpang = document.getElementById("total-penumpang");

anak.addEventListener("click", () => {
  let jumlahAnak = parseInt(anak.value);
  let jumlahDewasa = parseInt(dewasa.value);
  let jumlahTotal = jumlahAnak + jumlahDewasa;
  totalPenumpang.value = jumlahTotal;
  totalHarga.value = harga * jumlahTotal;
});

dewasa.addEventListener("click", () => {
  let jumlahAnak = parseInt(anak.value);
  let jumlahDewasa = parseInt(dewasa.value);
  let jumlahTotal = jumlahAnak + jumlahDewasa;
  totalPenumpang.value = jumlahTotal;
  totalHarga.value = harga * jumlahTotal;
});

// Format input harga dan ongkir ke format rupiah saat mengetik
const hargaInput = document.getElementById("harga");
const ongkirInput = document.getElementById("ongkir");

function formatRupiah(value) {
  return new Intl.NumberFormat("id-ID").format(value);
}

if (hargaInput) {
  hargaInput.addEventListener("input", function (e) {
    let value = this.value.replace(/\D/g, "");
    if (value) this.value = parseInt(value);
  });
}

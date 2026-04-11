document.querySelectorAll(".btn-detail").forEach((button) => {
  button.addEventListener("click", function () {
    const data = JSON.parse(this.getAttribute("data-detail"));

    console.log(data);
    // Sekarang panggil fungsi tampilkan modal
    openModal(data);
  });
});

function openModal(data) {
  // 1. Ambil elemen modal & list (pastikan kamu sudah punya id ini di HTML)
  const modal = document.getElementById("myModal");
  const detailList = document.getElementById("detail-list");

  // 2. Kosongkan list lama agar tidak menumpuk
  detailList.innerHTML = "";

  //   console.log(data);
  // 3. Mapping data ke dalam li
  // Data yang akan ditampilkan (dengan default values)
  const items = [
    {
      label: "📅 Tanggal",
      value: data.tanggal || "-",
    },
    {
      label: "👤 Nama Pembeli",
      value: data.nama_pembeli || "-",
    },
    {
      label: "✉️ Email",
      value: data.email || "-",
    },
    {
      label: "📍 Alamat",
      value: data.alamat_lengkap || "-",
    },
    {
      label: "🏷️ Kode Produk",
      value: data.kode_produk || "-",
    },
    {
      label: "🎯 Nama Produk",
      value: data.nama_produk || "-",
    },
    {
      label: "🎨 Warna",
      value: data.warna || "-",
    },
    {
      label: "⚡ Draw Weight",
      value: data.draw_weight || "-",
    },
    {
      label: "💰 Harga Awal",
      value: "Rp " + (data.harga || 0).toLocaleString("id-ID"),
    },
    {
      label: "🚚 Ongkir",
      value: "Rp " + (data.ongkir || 0).toLocaleString("id-ID"),
    },
    {
      label: "💰 Total Harga",
      value: "Rp " + (data.total || 0).toLocaleString("id-ID"),
    },
    {
      label: "🔄 Status",
      value: data.status || "-",
    },
  ];

  items.forEach((item) => {
    const li = document.createElement("li");
    li.className =
      "bg-white/5 hover:bg-white/10 rounded-xl p-3 flex justify-between items-center transition-all duration-200 hover:translate-x-1 border border-white/5 hover:border-white/15";
    li.innerHTML = `
                <span class="text-white/70 font-medium text-sm flex items-center gap-2">
                    ${item.label}
                </span>
                <span class="text-white font-semibold text-sm bg-black/20 px-3 py-1 rounded-lg">
                    ${item.value}
                </span>
            `;
    detailList.appendChild(li);
  });

  // 4. Tampilkan modal (ubah display jadi block/flex)
  modal.style.display = "flex";
}

if (!document.querySelector("#modal-animation-style")) {
  const style = document.createElement("style");
  style.id = "modal-animation-style";
  style.textContent = `
            @keyframes modalSlideOut {
                from {
                    opacity: 1;
                    transform: scale(1) translateY(0);
                }
                to {
                    opacity: 0;
                    transform: scale(0.95) translateY(-20px);
                }
            }
        `;
  document.head.appendChild(style);
}

function closeModal() {
  const modal = document.getElementById("myModal");
  const content = modal.querySelector(".bg-linear-to-br");

  // Animasi keluar
  content.style.animation = "modalSlideOut 0.2s ease-out forwards";
  setTimeout(() => {
    modal.style.display = "none";
    content.style.animation = "modalSlideIn 0.3s ease-out";
  }, 200);
}

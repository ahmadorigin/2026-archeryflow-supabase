// Dapatkan elemen yang dibutuhkan
const sidebar = document.getElementById("sidebar");
const hamburgerBtn = document.getElementById("hamburger-btn");
const overlay = document.getElementById("sidebar-overlay");

// Cek apakah elemen ditemukan (hanya jalankan jika ada)
if (sidebar && hamburgerBtn && overlay) {
  // Fungsi untuk membuka sidebar
  function openSidebar() {
    sidebar.classList.remove("-translate-x-full");
    overlay.classList.remove("hidden");
    document.body.style.overflow = "hidden"; // Mencegah scroll body saat sidebar terbuka
    hamburgerBtn.setAttribute("aria-expanded", "true");
  }

  // Fungsi untuk menutup sidebar
  function closeSidebar() {
    sidebar.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
    document.body.style.overflow = ""; // Kembalikan scroll body
    hamburgerBtn.setAttribute("aria-expanded", "false");
  }

  // Fungsi untuk toggle sidebar
  function toggleSidebar() {
    if (sidebar.classList.contains("-translate-x-full")) {
      openSidebar();
    } else {
      closeSidebar();
    }
  }

  // Event listener untuk hamburger button
  hamburgerBtn.addEventListener("click", toggleSidebar);

  // Event listener untuk overlay (klik di luar sidebar)
  overlay.addEventListener("click", closeSidebar);

  // Event listener untuk tombol ESC
  document.addEventListener("keydown", function (event) {
    if (
      event.key === "Escape" &&
      !sidebar.classList.contains("-translate-x-full")
    ) {
      closeSidebar();
    }
  });

  // OPSIONAL: Tutup sidebar saat klik link menu (di mobile)
  const sidebarLinks = document.querySelectorAll(".sidebar-link");
  sidebarLinks.forEach((link) => {
    link.addEventListener("click", function () {
      // Hanya tutup di mobile (lebar layar < 768px)
      if (window.innerWidth < 768) {
        closeSidebar();
      }
    });
  });

  // OPSIONAL: Handle resize window - jika resize ke desktop, pastikan sidebar terbuka
  window.addEventListener("resize", function () {
    if (window.innerWidth >= 768) {
      // Di desktop, pastikan overlay hidden dan body scroll normal
      overlay.classList.add("hidden");
      document.body.style.overflow = "";
      // Reset aria-expanded
      hamburgerBtn.setAttribute("aria-expanded", "false");
    } else {
      // Di mobile, pastikan sidebar tertutup jika belum
      if (!sidebar.classList.contains("-translate-x-full")) {
        // Jika sidebar terbuka di mobile saat resize, biarkan saja
        // Atau bisa ditutup otomatis, sesuaikan kebutuhan
      }
    }
  });
}

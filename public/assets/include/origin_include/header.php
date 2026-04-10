<!-- components/header.php -->
<header class="fixed top-0 left-0 w-full h-16 z-50 bg-teal-950/70 backdrop-blur-md border-b border-white/10 shadow-lg">
    <nav class="w-full h-full px-4 md:px-6">
        <div class="flex items-center justify-between w-full h-full">

            <!-- Bagian Kiri -->
            <div class="flex items-center gap-3 md:gap-4">
                <!-- Hamburger Button (Mobile Only) -->
                <button type="button" id="hamburger-btn"
                    class="md:hidden text-white/80 hover:text-white transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-white/30 rounded-lg p-1"
                    aria-label="Menu navigasi" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Judul Halaman Dinamis -->
                <h1 class="text-white font-semibold text-lg md:text-xl truncate">
                    <?= $page_title?>
                </h1>
            </div>

            <!-- Bagian Kanan: User Profile -->
            <div class="flex items-center gap-2 md:gap-3">
                <!-- Avatar & Nama User -->
                <div class="flex items-center gap-2 md:gap-3">
                    <!-- Avatar Bulat dengan gradasi teal -->
                    <div
                        class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-linear-to-br from-teal-600 to-teal-800 flex items-center justify-center shadow-md ring-2 ring-white/20">
                        <span class="text-white text-sm md:text-base font-medium">
                            <?= strtoupper(substr($user_name ?? 'Admin', 0, 1)); ?>
                        </span>
                    </div>

                    <!-- Nama User (sembunyikan di mobile sangat kecil, tampil di tablet ke atas) -->
                    <span class="text-white/90 text-sm md:text-base font-medium hidden sm:inline">
                        <?= $user_name ?? 'Administrator'; ?>
                    </span>
                </div>
            </div>

        </div>
    </nav>
</header>

<!-- Spacer untuk mengimbangi fixed header agar konten tidak tertutup -->
<div class="h-16"></div>
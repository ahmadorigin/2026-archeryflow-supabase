<!-- Modal dengan Tailwind CSS - Tema Teal/Cyan Gelap + Glassmorphism -->
<div id="myModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden justify-center items-center z-999"
    style="display:none;">

    <!-- Modal Content Glassmorphism -->
    <div
        class=" bg-linear-to-br from-cyan-900/95 to-teal-900/95 backdrop-blur-xl rounded-2xl w-[90%] max-w-md border border-white/20 shadow-2xl shadow-cyan-500/20 animate-[modalSlideIn_0.3s_ease-out] flex flex-col max-h-[90vh]">

        <!-- Header Modal -->
        <div class="shrink-0 px-6 pt-5 pb-3 border-b border-white/15">
            <div class="flex items-center gap-3">
                <span class="text-3xl">🏹</span>
                <div>
                    <h3 class="text-white text-xl font-bold tracking-tight">
                        Detail Penjualan
                    </h3>
                    <p class="text-white/60 text-xs mt-0.5">
                        Informasi lengkap transaksi
                    </p>
                </div>
            </div>
        </div>

        <!-- Body Modal dengan Detail List -->
        <div class="flex-1 overflow-y-auto scrollbar-custom px-6 py-5">
            <ul id="detail-list" class="space-y-3">
                <!-- Isi akan diisi JavaScript -->
            </ul>
        </div>

        <!-- Footer Modal dengan Tombol -->
        <div class="shrink-0 px-6 pb-5 pt-3 border-t border-white/15 flex justify-end">
            <button onclick="closeModal()"
                class="bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white border border-white/20 px-5 py-2 rounded-xl cursor-pointer font-medium transition-all duration-200 hover\:translate-y-\[-1px\] hover:shadow-lg flex items-center gap-2">
                <span>✖️</span>
                Tutup
            </button>
        </div>
    </div>
</div>

<style>
/* Tambahkan ke file CSS utama atau style tag */
.scrollbar-custom::-webkit-scrollbar {
    width: 6px;
}

.scrollbar-custom::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
}

.scrollbar-custom::-webkit-scrollbar-thumb {
    background: rgba(0, 255, 255, 0.3);
    border-radius: 10px;
}

.scrollbar-custom::-webkit-scrollbar-thumb:hover {
    background: rgba(0, 255, 255, 0.5);
}

/* Untuk Firefox */
.scrollbar-custom {
    scrollbar-width: thin;
    scrollbar-color: rgba(0, 255, 255, 0.3) rgba(255, 255, 255, 0.05);
}

/* Animasi Slide In untuk Modal */
@keyframes modalSlideIn {
    from {
        opacity: 0;
        transform: scale(0.95) translateY(-20px);
    }

    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

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
</style>
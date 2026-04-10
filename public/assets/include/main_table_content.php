<!-- components/main-content.php -->
<main class="flex-1 mt-5 ml-0 md:ml-64 h-[calc(100vh-4rem)] overflow-hidden">

    <!-- Area Scrollable Internal -->
    <div class="h-full overflow-auto p-4 md:p-6">

        <!-- Container Glass untuk Konten -->
        <div class="bg-white/5 backdrop-blur-sm rounded-xl border border-white/10 p-4 md:p-6">

            <!-- Form Pencarian -->
            <div class="mb-6">
                <form method="GET" action="" class="flex flex-col sm:flex-row gap-3">
                    <div class="flex-1">
                        <input type="text" name="keyword" autofocus autocomlete="off" placeholder="Cari data pembeli..."
                            value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>"
                            class="w-full px-4 py-2.5 bg-cyan-900/30 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
                    </div>
                    <button type="submit" name="cari"
                        class="px-6 py-2.5 bg-linear-to-r from-cyan-600 to-teal-600 hover:from-cyan-500 hover:to-teal-500 text-white font-medium rounded-lg transition-all duration-200 shadow-lg hover:shadow-cyan-500/25">
                        🔍 Cari Data
                    </button>
                </form>
            </div>

            <!-- Pesan Data Tidak Ditemukan -->
            <?php if(empty($noData)) : ?>
            <div class="mb-6 p-4 bg-red-500/10 border border-red-500/30 rounded-lg">
                <p class="text-red-400 italic flex items-center gap-2">
                    <span>⚠️</span>
                    Data tidak ditemukan. Silakan coba kata kunci lain.
                </p>
            </div>
            <?php endif; ?>

            <!-- Container Table dengan Scroll Horizontal -->
            <div class="overflow-auto whitespace-nowrap rounded-lg border border-white/10">
                <table class="min-w-full text-sm text-white">

                    <!-- Table Header -->
                    <thead class="bg-white/10 border-b border-white/10">
                        <tr>
                            <th class="px-4 py-3 text-left font-semibold">No</th>
                            <th class="px-4 py-3 text-left font-semibold">Nama Pembeli</th>
                            <th class="px-4 py-3 text-left font-semibold">Nama Produk</th>
                            <th class="px-4 py-3 text-left font-semibold">Total Harga</th>
                            <th class="px-4 py-3 text-left font-semibold">Tanggal Transaksi</th>
                            <th class="px-4 py-3 text-center font-semibold">Aksi</th>
                        </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        <?php if(!empty($rows)): ?>
                        <?php $no = 1; foreach($rows as $row): ?>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition-colors duration-150">
                            <td class="px-4 py-3"><?= $no++ ?></td>
                            <td class="px-4 py-3 font-medium"><?= htmlspecialchars($row["nama_pembeli"]) ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($row["nama_produk"]) ?></td>
                            <td class="px-4 py-3 text-cyan-300">Rp
                                <?= number_format($row["total"], 0, ',', '.') ?></td>
                            <td class="px-4 py-3"><?= date('d/m/Y', strtotime($row["tanggal"])) ?></td>
                            <td class="px-4 py-3">
                                <div class="flex justify-center gap-2">
                                    <!-- Edit Button -->
                                    <a href="update.php?id=<?= $row['id']; ?>"
                                        class="px-3 py-1 bg-yellow-500/20 hover:bg-yellow-500/30 text-yellow-300 rounded-md text-xs font-medium transition-all hover:shadow-[0_0_8px_rgba(234,179,8,0.3)]">
                                        ✏️ Edit
                                    </a>
                                    <!-- Detail Button -->
                                    <a href="#" data-detail='<?= json_encode($row); ?>'
                                        class="btn-detail px-3 py-1 bg-blue-500/20 hover:bg-blue-500/30 text-blue-300 rounded-md text-xs font-medium transition-all hover:shadow-[0_0_8px_rgba(59,130,246,0.3)]">
                                        🔬 Detail
                                    </a>
                                    <!-- Delete Button -->
                                    <a href="../delete.php?id=<?= $row["id"]; ?>"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                                        class="px-3 py-1 bg-red-500/20 hover:bg-red-500/30 text-red-300 rounded-md text-xs font-medium transition-all hover:shadow-[0_0_8px_rgba(239,68,68,0.3)]">
                                        🗑️ Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <!-- Data Kosong -->
                        <tr>
                            <td colspan="7" class="px-4 py-8 text-center text-white/40 italic">
                                Belum ada data. Silakan tambah data baru.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Info Tambahan: Total Data (Opsional) -->
            <?php if(!empty($rows)): ?>
            <div class="mt-4 text-white/50 text-sm flex flex-wrap justify-between items-center">
                <span>📊 Total Data: <?= count($rows) ?> record</span>
                <span class="text-cyan-400/60">✨ Scroll untuk melihat lebih banyak</span>
            </div>
            <?php endif; ?>

        </div>

    </div>
</main>
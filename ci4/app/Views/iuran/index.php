<?= $this->include('template/header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Keterangan</th>
            <th>Tanggal</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Jumlah</th>
            <th>ID Warga</th>
        </tr>
    </thead>
    <tbody>
    <?php if($iuran): foreach($iuran as $row): ?>
    <tr>
        <td><?= $row['Id_antrean']; ?></td>
        <td><?= $row['Keterangan']; ?></td>
        <td><?= $row['Tanggal']; ?></td>
        <td><?= $row['Bulan']; ?></td>
        <td><?= $row['Tahun']; ?></td>
        <td><?= $row['Jumlah_kas']; ?></td>
        <td><?= $row['id_warga']; ?></td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="6">Belum ada data.</td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/footer'); ?>
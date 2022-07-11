<?= $this->include('template/admin_header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Warga</th>
            <th>NIK</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Jumlah Kas</th>
        </tr>
    </thead>
    <tbody>
    <?php if($iuran): foreach($iuran as $row): ?>
    <tr>
        <td><?= $row['Id_warga']; ?></td>
        <td><?= $row['Nama']; ?></td>
        <td><?= $row['Nik']; ?></td>
        <td><?= $row['Bulan']; ?></td>
        <td><?= $row['Tahun']; ?></td>
        <td><?= $row['Jumlah']; ?></td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="6">Belum ada data.</td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/admin_footer'); ?>
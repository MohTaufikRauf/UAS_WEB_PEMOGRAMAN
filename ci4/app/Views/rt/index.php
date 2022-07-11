<?= $this->include('template/header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>No. Rumah</th>
            <th>Status</th>

        </tr>
    </thead>
    <tbody>
    <?php if($rt): foreach($rt as $row): ?>
    <tr>
        <td><?= $row['Id']; ?></td>
        <td><?= $row['Nik']; ?></td>
        <td><?= $row['Nama_warga']; ?></td>
        <td><?= $row['Gender']; ?></td>
        <td><?= $row['Alamat']; ?></td>
        <td><?= $row['No_rumah']; ?></td>
        <td><?= $row['Status']; ?></td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="6">Belum ada data.</td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/footer'); ?>
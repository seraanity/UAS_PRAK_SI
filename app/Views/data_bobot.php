<!-- data_kriteria.php -->
<h2>Data Bobot</h2>
<a href="/bobot/create" class="btn btn-primary">Tambah Bobot</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Kriteria</th>
            <th>Kode Kriteria</th>
            <th>Bobot</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($bobots as $bobot): ?>
        <tr>
            <td><?= $bobot['id_kriteria']; ?></td>
            <td><?= $bobot['kode']; ?></td>
            <td><?= $bobot['nilai']; ?></td>
            <td>
                <a href="/bobot/edit/<?= $bobot['id_bobot']; ?>" class="btn btn-warning">Edit</a>
                <a href="/bobot/delete/<?= $bobot['id_bobot']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

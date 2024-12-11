<!-- index.php -->
<h2>Data Siswa</h2>
<a href="/siswa/create" class="btn btn-primary">Tambah Siswa</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode Siswa</th>
            <th>Nama Siswa</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($siswas as $siswa): ?>
        <tr>
            <td><?= $siswa['kode_siswa']; ?></td>
            <td><?= $siswa['nama_siswa']; ?></td>
            <td>
                <a href="/siswa/edit/<?= $siswa['id_siswa']; ?>" class="btn btn-warning">Edit</a>
                <a href="/siswa/delete/<?= $siswa['id_siswa']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- data_kriteria.php -->
 <div class ="content">
 <div class="container-fluid">
   <h2>Data Alternatif</h2>
<a href="/alternatif/create" class="btn btn-primary mb-2">Tambah Alternatif</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Siswa</th>
            <th>Nama Siswa</th>
            <th>Kriteria Penilaian</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alternatifs as $alternatif): ?>
        <tr>
            <td><?= $alternatif['kode_siswa']; ?></td>
            <td><?= $alternatif['nama_siswa']; ?></td>
            <td><?= $alternatif['id_kriteria']; ?></td>
            <td><?= $alternatif['nilai']; ?></td>
            <td>
                <a href="/alternatif/edit/<?= $alternatif['id_konversi']; ?>" class="btn btn-warning">Edit</a>
                <a href="/alternatif/delete/<?= $alternatif['id_konversi']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table> 
 </div>
 </div>


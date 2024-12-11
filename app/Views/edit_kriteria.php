<!-- edit_kriteria.php -->
<h2>Edit Kriteria</h2>
<form action="/kriteria/update/<?= $kriteria['id_kriteria']; ?>" method="post">
    <div class="form-group">
        <label>Kode Kriteria</label>
        <input type="text" name="kode" class="form-control" value="<?= $kriteria['kode']; ?>" required>
    </div>
    <div class="form-group">
        <label>Nama Kriteria</label>
        <input type="text" name="nama_kriteria" class="form-control" value="<?= $kriteria['nama_kriteria']; ?>" required>
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="<?= $kriteria['keterangan']; ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="/kriteria" class="btn btn-secondary">Batal</a>
</form>

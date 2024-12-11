<!-- create_kriteria.php -->
<h2>Tambah Kriteria</h2>
<form action="/kriteria/store" method="post">
    <div class="form-group">
        <label>Kode Kriteria</label>
        <input type="text" name="kode" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Nama Kriteria</label>
        <input type="text" name="nama_kriteria" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="/kriteria" class="btn btn-secondary">Batal</a>
</form>

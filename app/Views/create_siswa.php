<!-- create.php -->
<h2>Tambah Siswa\</h2>
<form action="/siswa/store" method="post">
    <div class="form-group">
        <label>Kode Siswa</label>
        <input type="text" name="kode_siswa" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Nama Siswa</label>
        <input type="text" name="nama_siswa" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="/paket" class="btn btn-secondary">Batal</a>
</form>

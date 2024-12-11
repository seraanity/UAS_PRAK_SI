<!-- edit.php -->
<h2>Edit Data Siswa</h2>
<form action="/siswa/update/<?= $siswa['id_siswa']; ?>" method="post">
    <div class="form-group">
        <label>Kode Siswa</label>
        <input type="text" name="kode_siswa" class="form-control" value="<?= $siswa['kode_siswa']; ?>" required>
    </div>
    <div class="form-group">
        <label>Nama Siswa</label>
        <input type="text" name="nama_siswa" class="form-control" value="<?= $siswa['nama_siswa']; ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="/Siswa" class="btn btn-secondary">Batal</a>
</form>

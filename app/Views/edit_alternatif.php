<!-- edit_bobot.php -->
<h2>Edit Data Alternatif</h2>
<form action="/alternatif/update/<?= $alternatif['id_conversi']; ?>" method="post">
<div class="form-group">
        <label>No</label>
        <input type="text" name="id_konversi" class="form-control" value="<?= $alternatif['id_conversi']; ?>" required>
    </div>
<div class="form-group">
        <label>ID Siswa</label>
        <select name="id_siswa" class="form-control" required>
            <?php foreach ($siswas as $siswa): ?>
                <option value="<?= $siswa['id_siswa']; ?>"
                    <?= ($siswa['id_siswa'] == $alternatif['id_siswa']) ? 'selected' : ''; ?>>
                    <?= $siswa['id_siswa']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Nama Siswa</label>
        <input type="text" name="nama_siswa" class="form-control" value="<?= $alternatif['nama_siswa']; ?>" required>
    </div>
    <div class="form-group">
        <label>Nilai C1</label>
        <input type="number" name="C1" class="form-control" value="<?= $alternatif['C1']; ?>" required>
    </div>
    <div class="form-group">
        <label>Nilai C2</label>
        <input type="number" name="C2" class="form-control" value="<?= $alternatif['C2']; ?>" required>
    </div>
    <div class="form-group">
        <label>Nilai C3</label>
        <input type="number" name="C3" class="form-control" value="<?= $alternatif['C3']; ?>" required>
    </div>
    <div class="form-group">
        <label>Nilai C4</label>
        <input type="number" name="C4" class="form-control" value="<?= $alternatif['C4']; ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="/alternatif" class="btn btn-secondary">Batal</a>
</form>

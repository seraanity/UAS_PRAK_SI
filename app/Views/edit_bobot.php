<!-- edit_bobot.php -->
<h2>Edit Bobot</h2>
<form action="/bobot/update/<?= $bobot['id_bobot']; ?>" method="post">
<div class="form-group">
        <label>ID Kriteria</label>
        <select name="id_kriteria" class="form-control" required>
            <?php foreach ($kriterias as $kriteria): ?>
                <option value="<?= $kriteria['id_kriteria']; ?>"
                    <?= ($kriteria['id_kriteria'] == $bobot['id_kriteria']) ? 'selected' : ''; ?>>
                    <?= $kriteria['id_kriteria']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Kode Kriteria</label>
        <input type="text" name="kode" class="form-control" value="<?= $bobot['kode']; ?>" required>
    </div>
    <div class="form-group">
        <label>Bobot</label>
        <input type="number" step="0.01" name="bobot" class="form-control" value="<?= $bobot['nilai']; ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="/bobot" class="btn btn-secondary">Batal</a>
</form>

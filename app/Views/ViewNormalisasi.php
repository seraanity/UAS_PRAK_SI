<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Normalisasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Normalisasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">[Note: B = Benefit | C = Cost]</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Siswa</th>
                                        <th>C1 - Kepatuhan [B]</th>
                                        <th>C2 - Nilai Raport [B]</th>
                                        <th>C3 - Kehadiran [B]</th>
                                        <th>C4 - Jiwa Sosial [B]</th>
                                    </tr>
                                </thead>
                                <tbody>
    <?php 
    $no = 1;
    foreach ($dataMb['all'] as $row): 
        $maxMin = $dataMb['maxmin']; // Ambil nilai max/min
    ?>
    <tr>
        <td class="text-center"><?= $no++; ?></td>
        <td><?= $row->kode_siswa; ?></td>

        <!-- Normalisasi C1 -->
        <td class="text-center">
            <?= $row->C1; ?> / <?= $maxMin->maxK1; ?> = 
            <strong><?= round( $row->C1 / $maxMin->maxK1, 3); ?></strong>
        </td>
        <!-- Normalisasi C2 -->
        <td class="text-center">
            <?= $row->C2; ?> / <?= $maxMin->maxK2; ?> = 
            <strong><?= round($row->C2 / $maxMin->maxK2, 3); ?></strong>
        </td>
        <!-- Normalisasi C3 -->
        <td class="text-center">
            <?= $row->C3; ?> / <?= $maxMin->maxK3; ?> = 
            <strong><?= round($row->C3 / $maxMin->maxK3, 3); ?></strong>
        </td>
        <!-- Normalisasi C4 -->
        <td class="text-center">
            <?= $row->C4; ?> / <?= $maxMin->maxK4; ?> = 
            <strong><?= round($row->C4 / $maxMin->maxK4, 3); ?></strong>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
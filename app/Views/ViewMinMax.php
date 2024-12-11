<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>SPK Pemilihan Siswa Ternakal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Perhitungan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

 <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <p>[Note: B = Benefit | C = Cost]</p>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Keterangan</th>
                                    <th>C1 - Kepatuhan [B]</th>
                                    <th>C2 - Nilai Raport [B]</th>
                                    <th>C3 - Kehadiran [B]</th>
                                    <th>C4 - Jiwa Sosial [B]</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                        <th>Nilai Max/Min Kriteria</th>
                                        <td><?= $datamb->maxK1 ?></td>
                                        <td><?= $datamb->maxK2 ?></td>
                                        <td><?= $datamb->maxK3 ?></td>
                                        <td><?= $datamb->maxK4 ?></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
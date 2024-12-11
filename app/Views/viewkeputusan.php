<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hasil Perankingan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Keputusan Hasil</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <!-- Hitung NORMALISASI -->
          <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Siswa</th>
                  <th>Hasil Nilai</th>
                  <th>Status Kenakalan</th>
                </tr>
              </thead>
              <tbody>


                <?php
                $no = 0;
                foreach ($dataMb['all'] as $row) :
                  foreach ($dataMb['B1'] as $x) :
                    foreach ($dataMb['B2'] as $y) :
                      foreach ($dataMb['B3'] as $z) :
                        $no++;
                        foreach ($dataMb['maxmin'] as $rowx) :

                ?>
                          <tr>
                            <th> <?= $no; ?></th>
                            <td><?= $row->nama_siswa; ?></td>

                            <?php $jumlah = round(($row->C1 / $rowx->maxminK1) * $x->NilaiKriteria, 3) + round(($row->C2 / $rowx->maxminK2) * $y->NilaiKriteria, 3) + round(($rowx->maxminK3 / $row->C3) * $z->NilaiKriteria, 3); ?>
                            <td><?= $jumlah ?></td>
                            <td><?php if ($jumlah > 0.5) {
                                  echo "Siswa Nakal";
                                } else {
                                  echo "Masih Belum Termasuk Siswa Nakal";
                                } ?></td>
                          </tr>
                <?php
                        endforeach;
                      endforeach;
                    endforeach;
                  endforeach;
                endforeach;


                ?>

              </tbody>

            </table>
          </div>

          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

</section>
<!-- /.content -->
</div>
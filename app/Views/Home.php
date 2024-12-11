
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
      <div class="row justify-content-center mt-6"> <!-- Memusatkan seluruh kotak -->
      <div class="col-11">
        <div class="card">
            <div class="card-body text-center d-flex flex-column align-items-center justify-content-center"> <!-- Flexbox untuk pusat vertikal dan horizontal -->
                <h5 class="card-title" style="width: 100%; text-align: center;">APLIKASI SKORNAK</h5>
                <hr style="width: 50%;"> <!-- Garis pembatas di tengah -->
                <p class="card-text">
                    SKORNAK (Sistem Kalkulasi Nilai Kenakalan) adalah sebuah aplikasi berbasis digital yang dirancang untuk membantu pihak sekolah dalam mengukur dan memantau perilaku siswa di SMP Swasta Mulia Pratama Medan. Aplikasi ini digunakan untuk menghitung dan mencatat skor kenakalan serta kebaikan siswa, terutama bagi siswa yang terindikasi memiliki perilaku kurang baik.
                </p>
            </div>
        </div>
    </div>
</div>

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p>Data Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo site_url(relativePath: 'Siswa'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p>Data Kriteria</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo site_url(relativePath: 'kriteria');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p>Data Bobot</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo site_url(relativePath: 'bobot');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p>Data Alternatif</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo site_url(relativePath: 'alternatif');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          


          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content -->
  </div>
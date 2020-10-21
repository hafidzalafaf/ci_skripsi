  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sistem Kepegawaian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('karyawan/Karyawan') ?>">Home</a></li>
              <li class="breadcrumb-item active">Daily Activity</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daily Activity</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table>
                  <tr>
                    <td class="pr-2"><a href="<?php echo base_url('karyawan/Karyawan/daily_form') ?>" class="btn btn-block btn-sm btn-success" style="width: 100px;">New Task</a></td>
                    <td><a href="<?php echo base_url('karyawan/Karyawan/daily_report') ?>" class="btn btn-block btn-sm btn-primary" style="width: 100px;">Report</a></td>
                  </tr>
                </table>

                <br>
                <div class="bungkus p-0" style="overflow: scroll;">
                  <table class="table table-bordered table-hover" style="table-layout: fixed; word-wrap: break-word;">
                    <thead>
                      <tr align="center">
                        <th width="50px">No</th>
                        <th width="250px">Aktivitas</th>
                        <th width="70px" align="center">Hasil</th>
                        <th width="250px">Catatan</th>
                        <th width="250px">Evaluasi</th>
                        <th width="80px">Status</th>
                        <th width="80px">Urgensi</th>
                        <th width="80px">Aksi</th>
                      </tr>
                    </thead>
                    <tr>
                      <td>1</td>
                      <td>Membuat invoice permintaan produk kertas A4</td>
                      <td align="center"><span class="badge badge-primary">Proses</span></td>
                      <td>Invoice belum diketahui nominalnya</td>
                      <td>
                        Minta data permintaan
                        <br>
                        <p class="text-sm text-muted">Hafidz AA.</p>
                        Tugas yang anda lakukan sudah sesuai
                        <br>
                        <p class="text-sm text-muted">Norhadi.</p>
                      </td>
                      <td align="center"><span class="badge badge-danger">Pending</span></td>
                      <td align="center"><span class="badge badge-danger">Top</span></td>
                      <td align="center">
                        <div class="btn-group">
                          <a href="<?php echo base_url('karyawan/Karyawan/daily_update') ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit" style="color:white;"></i></a>
                          <a href="" onclick="return confirm('Yakin menghapus data ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>

                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
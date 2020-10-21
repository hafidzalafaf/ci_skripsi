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
            <li class="breadcrumb-item active"><a href="<?php echo base_url('hrd/Hrd/index') ?>">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url('hrd/Hrd/data_karyawan') ?>">Divisi</a></li>
            <li class="breadcrumb-item">Karyawan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Section table karyawan -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5>Tabel Karyawan Divisi A</h5>
              <div class="alert alert-sm alert-success alert-dismissible m-1">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Menampilkan selurh data karyawan pada Divisi A.
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table>
                <tr>
                  <td class="pr-2"><a href="<?php echo base_url('hrd/Hrd/tambah_data_karyawan') ?>" class="btn btn-block btn-md btn-success">Tambah Karyawan</a></td>
                </tr>
              </table>
              <br>
              <div class="bungkus" style="overflow: scroll;">
                <table class="table table-bordered table-hover" style="table-layout: fixed; word-wrap: break-word;">
                  <thead>
                    <tr align="center">
                      <th width="50px">No</th>
                      <th width="200px">Nama</th>
                      <th width="130px">NIP</th>
                      <th width="130px">Divisi</th>
                      <th width="150px">Jabatan</th>
                      <th width="150px">Perusahaan</th>
                      <th width="80px">Gaji</th>
                      <th width="80px">Kinerja</th>
                      <th width="120px">Aksi</th>
                    </tr>
                  </thead>
                  <tr>
                    <td>1</td>
                    <td>Hafidz Al Afaf</td>
                    <td>0812121021</td>
                    <td>Marketing</td>
                    <td>Staff IT</td>
                    <td>PT.Aneka Grafindo</td>
                    <td class="d-flex justify-content-center"><a href="<?php echo base_url('hrd/Hrd/gaji_karyawan') ?>" class="btn btn-primary btn-sm" title="Lihat Gaji">Lihat</a></td>
                    <td align="center"><a href="<?php echo base_url('hrd/Hrd/kinerja') ?>" class="btn btn-primary btn-sm" title="Lihat Kinerja">Lihat</a></td>
                    <td align="center">
                      <div class="btn-group">
                        <a href="<?php echo base_url('hrd/Hrd/data_pribadi') ?>" class="btn btn-success btn-sm" title="Lihat Detail"><i class="fas fa-eye" style="color:white;"></i></a>
                        <a href="<?php echo base_url('hrd/Hrd/tambah_data_karyawan') ?>" class="btn btn-warning btn-sm" title="Update"><i class="fas fa-edit" style="color:white;"></i></a>
                        <a href="" onclick="return confirm('Yakin menghapus data ?')" class="btn btn-danger btn-sm" title="Hapus"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Kurniawan</td>
                    <td>0812121021</td>
                    <td>Accounting Manager</td>
                    <td>Staff IT</td>
                    <td>PT.Aneka Grafindo</td>
                    <td class="d-flex justify-content-center"><a href="<?php echo base_url('hrd/Hrd/gaji_karyawan') ?>" class="btn btn-primary btn-sm" title="Lihat Gaji">Lihat</a></td>
                    <td align="center"><a href="<?php echo base_url('hrd/Hrd/kinerja') ?>" class="btn btn-primary btn-sm" title="Lihat Kinerja">Lihat</a></td>
                    <td align="center">
                      <div class="btn-group">
                        <a href="<?php echo base_url('hrd/Hrd/data_pribadi') ?>" class="btn btn-success btn-sm" title="Lihat Detail"><i class="fas fa-eye" style="color:white;"></i></a>
                        <a href="<?php echo base_url('hrd/Hrd/tambah_data_karyawan') ?>" class="btn btn-warning btn-sm" title="Update"><i class="fas fa-edit" style="color:white;"></i></a>
                        <a href="" onclick="return confirm('Yakin menghapus data ?')" class="btn btn-danger btn-sm" title="Hapus"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Hafidz Al Afaf</td>
                    <td>0812121021</td>
                    <td>IT</td>
                    <td>Staff IT</td>
                    <td>PT.Aneka Grafindo</td>
                    <td class="d-flex justify-content-center"><a href="<?php echo base_url('hrd/Hrd/gaji_karyawan') ?>" class="btn btn-primary btn-sm" title="Lihat Gaji">Lihat</a></td>
                    <td align="center"><a href="<?php echo base_url('hrd/Hrd/kinerja') ?>" class="btn btn-primary btn-sm" title="Lihat Kinerja">Lihat</a></td>
                    <td align="center">
                      <div class="btn-group">
                        <a href="<?php echo base_url('hrd/Hrd/data_pribadi') ?>" class="btn btn-success btn-sm" title="Lihat Detail"><i class="fas fa-eye" style="color:white;"></i></a>
                        <a href="#<?php echo base_url('hrd/Hrd/tambah_data_karyawan') ?>" class="btn btn-warning btn-sm" title="Update"><i class="fas fa-edit" style="color:white;"></i></a>
                        <a href="" onclick="return confirm('Yakin menghapus data ?')" class="btn btn-danger btn-sm" title="Hapus"><i class="fas fa-trash"></i></a>
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
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->
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
            <li class="breadcrumb-item active"><a href="<?php echo base_url('hrd/Hrd/detail_karyawan') ?>">Karyawan</a></li>
            <li class="breadcrumb-item">Form</li>
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
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">From Tambah Karyawan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
              <div class="card-body">
                <div class="row">
                  <!-- form bagian kiri -->
                  <div class="col-lg-6 col-12 pl-3 pr-3">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="nik">NIP</label>
                      <input type="text" class="form-control" id="nik" placeholder="Masukkan Nomor Induk Pegawai">
                    </div>
                    <div class="form-group">
                      <label for="no_hp">No. HP</label>
                      <input type="text" class="form-control" id="no_hp" placeholder="Masukkan Nomor HP anda">
                    </div>
                    <div class="form-group">
                      <label for="no_keluarga">No. HP Keluarga</label>
                      <input type="text" class="form-control" id="no_keluarga" placeholder="Masukkan Nomor HP Keluarga anda">
                    </div>
                    <div class="form-group">
                      <label for="rekening">No. Rekening</label>
                      <input type="text" class="form-control" id="rekening" placeholder="Masukkan Nomor Rekening Anda">
                    </div>
                    <div class="form-group">
                      <label for="npwp">NPWP</label>
                      <input type="text" class="form-control" id="npwp" placeholder="Masukkan Nomor NPWP Anda">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email anda">
                    </div>
                    <div class="form-group">
                      <label for="ttl">Tempat, Tanggal Lahir</label>
                      <input type="text" class="form-control" id="ttl" placeholder="Masukkan Tempat Tanggal Lahir">
                    </div>
                  </div>
                  <!-- End form bagian kiri -->

                  <!-- form bagian kanan -->
                  <div class="col-lg-6 col-12 pl-3 pr-3">
                    <div class="form-group">
                      <label for="ttl">Perusahaan</label>
                      <input type="text" class="form-control" id="perusahaan" placeholder="Masukkan Nama Perusahaan">
                    </div>
                    <div class="form-group">
                      <label for="ttl">Office</label>
                      <input type="text" class="form-control" id="perusahaan" placeholder="Masukkan Nama Perusahaan">
                    </div>
                    <div class="form-group">
                      <label>Status Pernikahan</label>
                      <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>Menikah</option>
                        <option>Belum Menikah</option>
                      </select>
                    </div>
                    <div class="form-group pb-2 border-bottom border-dark">
                      <div class="row">
                        <div class="col-lg-4 col-12">
                          <label>Status Karyawan</label>
                          <select class="form-control">
                            <option>-- Pilih --</option>
                            <option>PKWT</option>
                            <option>PKWTT</option>
                          </select>
                        </div>
                        <div class="col-lg-4 col-12">
                          <p class="mb-2">Tanggal Mulai</p>
                          <input type="date" class="form-control" id="">
                        </div>
                        <div class="col-lg-4 col-12">
                          <p class="mb-2">Tanggal Akhir</p>
                          <input type="date" class="form-control" id="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Alamat Tinggal</label>
                      <textarea class="form-control" rows="3" placeholder="Masukkan Alamat Tinggal Sekarang..." id="alamat_tinggal"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Alamat di KTP</label>
                      <textarea class="form-control" rows="3" placeholder="Masukkan Alamat Tinggal Sesuai KTP..." id="alamat_ktp"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="upload_foto">Upload Foto</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="upload_foto">
                          <label class="custom-file-label" for="upload_foto">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end form bagian kanan -->
                </div>
                <!-- end row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer d-flex justify-content-center m-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-secondary ml-2">Cancel</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
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
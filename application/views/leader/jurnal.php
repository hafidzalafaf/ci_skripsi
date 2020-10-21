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
              <li class="breadcrumb-item"><a href="<?php echo base_url('leader/Leader') ?>">Home</a></li>
              <li class="breadcrumb-item active">Jurnal</li>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jurnal</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="overflow: scroll;">
              <a href="<?php echo base_url('leader/Leader/jurnal_form') ?>" class="btn btn-block btn-sm btn-success mb-3" style="width: 100px;">New Journal</a>
                <table class="table table-bordered table-hover table-sm">
                  <thead>                  
                    <tr align="center">
                      <th width="5%">No</th>
                      <th width="20%">Nama</th>
                      <th width="40%">Aktivitas</th>
                      <th width="10%">Jam</th>
                      <th width="15%">Tanggal</th>
                      <th width="10%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr align="center">
                      <td class="p-2">1</td>
                      <td class="p-2">Hafidz Al Afaf</td>
                      <td class="p-2">Tertidur di gudang</td>
                      <td class="p-2">13.00</td>
                      <td class="p-2">2 Oktober 2020</td>
                      <td class="p-2">
                        <a href="<?php echo base_url('leader/Leader/jurnal_update') ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit" style="color:white;"></i></a>
                        <a href="" onclick="return confirm('Yakin menghapus data ?')" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    
                  
                  </tbody>
                </table>
                
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
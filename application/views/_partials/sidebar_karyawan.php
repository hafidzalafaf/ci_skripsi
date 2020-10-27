  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <?php
    $role_id = $this->session->userdata('role_id');
    if ($role_id == 1) {
      $url_dashboard = 'karyawan/Karyawan';
    } else if ($role_id == 2) {
      $url_dashboard = 'leader/Leader';
    } else if ($role_id == 3) {
      $url_dashboard = 'hrd/Hrd';
    } else if ($role_id == 4) {
      $url_dashboard = 'hrd/Hrd';
    } else {
      redirect('home/Login');
    }
    ?>

    <a href="<?php echo base_url($url_dashboard); ?>" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/logo_pt_icon.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PT. Sinar Grafindo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/dist/img/') . $user['image'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <span class="brand-text font-weight-light" style="color: white;"><?php echo $this->session->userdata('username'); ?></span>
          <!-- <a href="#" class="d-block">Nama Karyawan</a> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- QUERY MENU -->

          <?php
          $sidebar = $this->db->get_where('user_access_menu', ['role_id' => $role_id])->result_array();
          // $sidebabr = $this->db->query("SELECT * FROM 'user_sub_menu' WHERE 'role_id' = $role_id AND 'is_Active' = 1")->result_Array;
          // var_dump($sidebar);
          // die;
          foreach ($sidebar as $sb) :
            $id_menu = $sb['menu_id'];

            $menu = $this->db->get_where('user_sub_menu', ['id_menu' => $id_menu])->result_array();
            foreach ($menu as $m) :
          ?>

              <li class="nav-item">
                <a href="<?php echo base_url($m['url']); ?>" class="nav-link">
                  <i class="<?php echo $m['icon']; ?>"></i>
                  <p><?php echo $m['judul']; ?></p>
                </a>
              </li>

          <?php
            endforeach;
          endforeach;
          ?>
          <li class="nav-item">
            <a href="<?php echo base_url('home/Login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
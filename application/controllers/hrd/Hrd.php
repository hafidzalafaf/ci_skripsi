<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hrd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        cek_login();
    }

    public function index()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Dashboard';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/dashboard_hrd', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
        $this->load->view('_partials/js_hrd');
    }

    public function data_pribadi()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Data Pribadi';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/data_pribadi');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily_form()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Daily';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/daily_form');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily_report()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Daily';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/daily_report');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily_update()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Daily';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/daily_update');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Daily';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/daily');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function data_karyawan()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Data Karyawan';
        $data['divisi'] = $this->hrd_model->divisi_tampil()->result();

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/data_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function detail_karyawan($id_divisi)
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Data Karyawan';
        if ($id_divisi == 1) {
            $data['divisi'] = $this->db->get_where('tb_karyawan', ['id_divisi' => $id_divisi])->result_array();
            // var_dump($data['divisi']);
        } else if ($id_divisi == 2) {
            $data['divisi'] = $this->db->get_where('tb_karyawan', ['id_divisi' => $id_divisi])->result_array();
        } else if ($id_divisi == 3) {
            $data['divisi'] = $this->db->get_where('tb_karyawan', ['id_divisi' => $id_divisi])->result_array();
        } else if ($id_divisi == 4) {
            $data['divisi'] = $this->db->get_where('tb_karyawan', ['id_divisi' => $id_divisi])->result_array();
        } else if ($id_divisi == 5) {
            $data['divisi'] = $this->db->get_where('tb_karyawan', ['id_divisi' => $id_divisi])->result_array();
        } else if ($id_divisi == 6) {
            $data['divisi'] = $this->db->get_where('tb_karyawan', ['id_divisi' => $id_divisi])->result_array();
        } else if ($id_divisi == 7) {
            $data['divisi'] = $this->db->get_where('tb_karyawan', ['id_divisi' => $id_divisi])->result_array();
        } else if ($id_divisi == 8) {
            $data['divisi'] = $this->db->get_where('tb_karyawan', ['id_divisi' => $id_divisi])->result_array();
        } else if ($id_divisi == 9) {
            $data['divisi'] = $this->db->get_where('tb_karyawan', ['id_divisi' => $id_divisi])->result_array();
        } else if ($id_divisi == 10) {
            $data['divisi'] = $this->db->get_where('tb_karyawan', ['id_divisi' => $id_divisi])->result_array();
        } else {
            redirect('home/Login/blocked');
        }


        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/detail_karyawan', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function edit_gaji_karyawan()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Data Karyawan';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/edit_gaji_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function gaji_karyawan()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Data Karyawan';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/gaji_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function gaji()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Gaji';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/gaji');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function input_gaji_karyawan()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Data Karyawan';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/input_gaji_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function tambah_data_karyawan()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Data Karyawan';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/tambah_data_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function kinerja()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Data Karyawan';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/kinerja');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function kinerja_form()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Data Karyawan';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/kinerja_form');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function kinerja_update()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Hrd Data Karyawan';

        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/kinerja_update');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function status_update()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan',  $data);
        $this->load->view('hrd/status_update');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }
}

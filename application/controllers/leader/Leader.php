<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leader extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/dashboard_leader', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily_form()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/daily_form');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily_report()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/daily_report');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily_update()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/daily_update');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/daily');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function data()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/data');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function evaluasi()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/evaluasi');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function gaji()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/gaji');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function kinerja_form()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/kinerja_form');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function kinerja_update()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/kinerja_update');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function kinerja()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/kinerja');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function monitoring_daily()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/monitoring_daily');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function monitoring_report()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/monitoring_report');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function monitoring_update()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/monitoring_update');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function monitoring()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/monitoring');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }
    public function jurnal()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/jurnal');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }
    public function jurnal_form()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/jurnal_form');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }
    public function jurnal_update()
    {
        // mengambil data dari database berdasarakan session yang sudah terbentuk
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar_karyawan', $data);
        $this->load->view('leader/jurnal_update');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }
}

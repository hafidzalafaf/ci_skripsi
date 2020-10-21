<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hrd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/dashboard_hrd');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
        $this->load->view('_partials/js_hrd');
    }

    public function data_pribadi()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/data_pribadi');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily_form()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/daily_form');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily_report()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/daily_report');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily_update()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/daily_update');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function daily()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/daily');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function data_karyawan()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/data_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function detail_karyawan()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/detail_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function edit_gaji_karyawan()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/edit_gaji_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function gaji_karyawan()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/gaji_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function gaji()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/gaji');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function input_gaji_karyawan()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/input_gaji_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function tambah_data_karyawan()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/tambah_data_karyawan');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function kinerja()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/kinerja');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function kinerja_form()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/kinerja_form');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function kinerja_update()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/kinerja_update');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }

    public function status_update()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('_partials/sidebar');
        $this->load->view('hrd/status_update');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Karyawan extends CI_Controller {
        function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_karyawan');
            $this->load->view('karyawan/dashboard_karyawan');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            $this->load->view('_partials/js_karyawan');
        }
        public function data_pribadi(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_karyawan');
            $this->load->view('karyawan/data_pribadi');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
        }
        public function daily(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_karyawan');
            $this->load->view('karyawan/daily');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
        }
        public function evaluasi(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_karyawan');
            $this->load->view('karyawan/evaluasi');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
        }
        public function gaji(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_karyawan');
            $this->load->view('karyawan/gaji');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
        }
        public function daily_form(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_karyawan');
            $this->load->view('karyawan/daily_form');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
        }
        public function daily_report(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_karyawan');
            $this->load->view('karyawan/daily_report');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
        }
        public function daily_update(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_karyawan');
            $this->load->view('karyawan/daily_update');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
        }                           
    }
?>

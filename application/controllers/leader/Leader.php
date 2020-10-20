<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Leader extends CI_Controller{
        function __construc(){
            parent::__construct();
        }

        public function index(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/dashboard_leader');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
        }

        public function daily_form(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/daily_form');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function daily_report(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/daily_report');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function daily_update(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/daily_update');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function daily(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/daily');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function data(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/data');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function evaluasi(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/evaluasi');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function gaji(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/gaji');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function kinerja_form(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/kinerja_form');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function kinerja_update(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/kinerja_update');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function kinerja(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/kinerja');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function monitoring_daily(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/monitoring_daily');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function monitoring_report(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/monitoring_report');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function monitoring_update(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/monitoring_update');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }

        public function monitoring(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar_leader');
            $this->load->view('leader/monitoring');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            
        }
    }
?>
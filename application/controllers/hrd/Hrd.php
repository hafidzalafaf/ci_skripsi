<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Hrd extends CI_Controller {
        function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->load->view('_partials/header');
            $this->load->view('_partials/navbar');
            $this->load->view('_partials/sidebar');
            $this->load->view('hrd/dashboard_hrd');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
            $this->load->view('_partials/js_hrd');
        }
    }
?>

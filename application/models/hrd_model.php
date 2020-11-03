<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hrd_model extends CI_Model
{
    public function divisi_tampil()
    {
        return $this->db->get('tb_divisi');
    }
}

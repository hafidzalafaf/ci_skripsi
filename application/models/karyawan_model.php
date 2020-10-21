<?php 
class Karyawan_model extends CI_Model{
	public function daily_tampil()
	{
		return $this->db->get('tb_kyn_daily');
	}
	public function daily_input($data)
	{
		$this->db->insert('tb_kyn_daily', $data);
	}
}

?>
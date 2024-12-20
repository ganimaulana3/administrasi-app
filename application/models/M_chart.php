<?php
// Penduduk.php
class M_chart extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("SELECT * from sigaka_karyawan");
		return $data->result();
	}
 
}

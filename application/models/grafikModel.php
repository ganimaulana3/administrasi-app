<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class grafikModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function grafik_laporan(){
		$this->db->select('*');
		$this->db->from('sigaka_karyawan');
		$this->db->join('sigaka_jabatan', 'sigaka_jabatan.jabatan_id = sigaka_karyawan.karyawan_jabatan_id');
		$this->db->order_by('karyawan_nama','ASC');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function jumlah_karyawan(){
		$this->db->from('sigaka_karyawan');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function jumlah_lembur(){
		$this->db->from('sigaka_absen');
		$this->db->where('absen_status','lembur');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function jumlah_normal(){
		$this->db->from('sigaka_absen');
		$this->db->where('absen_status','normal');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function jumlah_pinjaman(){
		$this->db->from('sigaka_pinjam');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function jumlah_absen(){
		$this->db->from('sigaka_absen');
		$this->db->like('absen_date_created',date('Y-m-d'));
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function chart_database(){
		return $this->db->get('sigaka_karyawan')->result();
	}

}

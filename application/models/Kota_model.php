<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota_model extends CI_Model {

	//function read berfungsi mengambil/read data dari table kota di database
	public function read($karyawan_id='') {

		//sql read
        $this->db->select('sigaka');
        $this->db->from('karyawan_id');
        $this->db->join('sigaka', 'sigaka_karyawan = karyawan_id');

        //filter data sesuai id yang dikirim dari controller
		if($karyawan_id != '') {
			$this->db->where('sigaka_karyawan.karyawan_id', $karyawan_id);
		}

        $this->db->order_by('sigaka_karyawan.karyawan_id ASC, sigaka_karyawan.karyawan_id ASC');

		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
	}

	//function read berfungsi mengambil/read data dari table kota di database
	public function read_single($id) {

		//sql read
		$this->db->select('*');
		$this->db->from('sigaka_karyawan');

		//$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id', $id);

		$query = $this->db->get();

		//query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
	}

	//function insert berfungsi menyimpan/create data ke table kota di database
	public function insert($input) {
		//$input = data yang dikirim dari controller
		return $this->db->insert('sigaka_karyawan', $input);
	}

	//function update berfungsi merubah data ke table kota di database
	public function update($input, $id) {
		//$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id', $id);

		//$input = data yang dikirim dari controller
		return $this->db->update('sigaka_karyawan', $input);
	}

	//function delete berfungsi menghapus data dari table kota di database
	public function delete($id) {
		//$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
		$this->db->where('id', $id);
		return $this->db->delete('sigaka_karyawan');
	}
}

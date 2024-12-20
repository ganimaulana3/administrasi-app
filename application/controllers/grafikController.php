<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class grafikController extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('grafikModel');
		$this->load->helper('nominal');
		$this->load->model(array('kota_model'));
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}
	public function index(){
		$data = array(
			'grafik' => $this->grafikModel->grafik_laporan(),
			'title' => 'grafik'
		);
		$this->load->view('templates/header',$data);
		$this->load->view('backend/grafik/index',$data);
		$this->load->view('templates/footer');
	}
	public function laporan(){
		$data = array(
			'jumlah_karyawan' => $this->grafikModel->jumlah_karyawan(),
			'jumlah_pinjam' => $this->grafikModel->jumlah_pinjaman(),
			'jumlah_absen' => $this->grafikModel->jumlah_absen(),
			'jumlah_lembur' => $this->grafikModel->jumlah_lembur(),
			'jumlah_normal' => $this->grafikModel->jumlah_normal(),
			'title' => 'Dashboard'
		);
		$this->load->view('templates/header',$data);
		$this->load->view('backend/grafik/index',$data);
		$this->load->view('templates/footer');
	}
	public function chart_data(){
		$data = $this->grafikModel->chart_database();
		echo json_encode($data);
	}

	
}

<?php
class PendudukController extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_chart');
	}
 
	public function index()
	{
		$data['graph'] = $this->M_chart->graph();
		$this->load->view('backend/grafik/index', $data);
	}
 
}

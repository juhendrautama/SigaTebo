<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Halaman_utama extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->model('M_crud_kategoriData');
		$this->load->model('M_crud_JudulSiga');
	}



	function index()
	{
		$data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
		$this->load->view('lending/welcome', $data);
	}

	function DataCari()
	{
		$isicari = $this->input->post('isicari');
		$data['GetJudulDataCari'] = $this->M_crud_JudulSiga->GetJudulDataCari($isicari);

		$data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
		$this->load->view('lending/tools/isicariJudul', $data);
	}
}
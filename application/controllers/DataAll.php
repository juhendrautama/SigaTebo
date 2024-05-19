<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class DataAll extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
        $this->load->model('M_crud_kategoriData');
        $this->load->model('M_crud_JudulSiga');
        $this->load->model('M_crud_unit');
        $this->load->model('M_crud_Data');
    }

    function index()
    {
        $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
        $data['GetDataJudulAll'] = $this->M_crud_JudulSiga->GetDataJudulAll();
        $this->load->view('lending/dataJudulAll', $data);
    }
}

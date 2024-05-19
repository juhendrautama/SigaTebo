<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Publikasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
        $this->load->model('M_crud_kategoriData');
        $this->load->model('M_crud_publikasi');
    }

    function index()
    {
        $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
        $data['GetDataPublikasi'] = $this->M_crud_publikasi->GetDataPublikasi();
        $this->load->view('lending/dataPublikasi', $data);
    }
}

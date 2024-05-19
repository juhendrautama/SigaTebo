<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
        $this->load->model('M_crud_kategoriData');
        $this->load->model('M_crud_JudulSiga');
    }

    function Detail($id)
    {
        $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
        $data['GetDataIdKategori'] = $this->M_crud_kategoriData->GetDataIdKategori($id)->row();
        $data['GetJudulIdkategori'] = $this->M_crud_JudulSiga->GetJudulIdkategoriAll($id);
        $this->load->view('lending/judulIdkate', $data);
    }
}

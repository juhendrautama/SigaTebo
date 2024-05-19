<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Data extends CI_Controller
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

    function Detail($idKategoriData, $idJudulData)
    {
        $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
        $data['GetDataIdJudul'] = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();
        $data['GetDataIdKategori'] = $this->M_crud_kategoriData->GetDataIdKategori($idKategoriData)->row();
        $data['GetDataSigaDetail'] = $this->M_crud_Data->GetDataSigaDetail($idKategoriData, $idJudulData);
        $data['getdata'] = $this->M_crud_Data->getDataMaster($idKategoriData, $idJudulData)->result();
        $this->load->view('lending/dataSigaDetail', $data);
    }
}

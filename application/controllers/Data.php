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
        $tahun_end = date('Y');
        $tahun_start = $tahun_end - 2;

        $tahunAwal = '2022';
        $tahunAkhir = '2023';
        $data['tahunAwal'] = $tahunAwal;
        $data['tahunAkhir'] = $tahunAkhir;

        $data['idkategori'] = $idKategoriData;
        $data['idjudul'] = $idJudulData;
        $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
        $data['GetDataIdJudul'] = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();
        $data['GetDataIdKategori'] = $this->M_crud_kategoriData->GetDataIdKategori($idKategoriData)->row();

        $datajudul = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();
        for ($i = 2; $i <= 53; $i++) {
            if ($datajudul->formatTabel == (string)$i) {
                $methodName = 'getData' . $i;
                if (method_exists($this->M_crud_Data, $methodName)) {
                    $data['tampildatasiga'] = $this->M_crud_Data->$methodName($idKategoriData, $idJudulData, $tahunAwal, $tahunAkhir);
                } else {
                    // Handle the case where the method does not exist
                    $data['tampildatasiga'] = null;
                    // You can also log an error or throw an exception here
                }
                break; // Keluar dari loop setelah menemukan kecocokan
            }
        }


        $this->load->view('lending/dataSigaDetail', $data);
    }

    public function ajaxdetail()
    {

        $tahunend = $this->input->post('tahunend');
        $tahunstart = $this->input->post('tahunstart');
        $idkategori = $this->input->post('idkategori');
        $idjudul = $this->input->post('idjudul');

        $data['tahunstart'] = $tahunstart;
        $data['tahunend'] = $tahunend;
        $data['getdata'] = $this->M_crud_Data->getDataRezky($idkategori, $idjudul, $tahunstart, $tahunend)->result();
        $this->load->view('lending/ajaxdetail', $data);
    }
}

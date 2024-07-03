<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class DataSigaUser extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
        $this->load->model('M_crud_kategoriData');
        $this->load->model('M_crud_JudulSiga');
        $this->load->model('M_crud_Data');
        $this->load->model('M_crud_unit');
        $this->load->model('M_crud_wilayah');
        $this->load->library("session");
        $this->sessionku();
    }

    function sessionku()
    {
        $berhasil = $this->session->userdata('login');
        if (!isset($berhasil) || $berhasil != true) {

            redirect('Login_akses');
        }
    }

    public function index()
    {
        $idUnitKerja = $this->session->userdata('idUnitKerja');
        $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
        $data['GetJudulSiga'] = $this->M_crud_JudulSiga->GetJudulSiga($idUnitKerja);
        $data['GetAllformatTabel'] = $this->M_crud_JudulSiga->GetAllformatTabel();
        $this->load->view('User/dataSiga', $data);
    }


    public function Data($idUnitKerja, $idKategoriData, $idJudulData)
    {
        $data['GetDataIdUnit'] = $this->M_crud_unit->GetDataIdUnit($idUnitKerja)->row();
        $data['GetDataIdKategori'] = $this->M_crud_kategoriData->GetDataIdKategori($idKategoriData)->row();
        $data['GetDataIdJudul'] = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();

        $data['GetDataKec'] = $this->M_crud_wilayah->GetDataKec();
        $data['GetDatauptPuskesmas'] = $this->M_crud_wilayah->GetDatauptPuskesmas();
        $datajudul = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();
        for ($i = 2; $i <= 53; $i++) {
            if ($datajudul->formatTabel == (string)$i) {
                $methodName = 'TampilSaga' . $i;
                if (method_exists($this->M_crud_Data, $methodName)) {
                    $data['tampilsiga'] = $this->M_crud_Data->$methodName($idUnitKerja, $idKategoriData, $idJudulData);
                } else {
                    // Handle the case where the method does not exist
                    $data['tampilsiga'] = null;
                    // You can also log an error or throw an exception here
                }
                break; // Keluar dari loop setelah menemukan kecocokan
            }
        }

        $this->load->view('admin/dataSigaDetail', $data);
    }
}





/* copy reg juhendra utama*/
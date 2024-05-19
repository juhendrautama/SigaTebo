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
        $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
        $this->load->view('User/dataSigaHome', $data);
    }

    public function GetJudulIdkategori()
    {
        $id = $this->input->post('id');
        $data['GetJudulIdkategori'] = $this->M_crud_JudulSiga->GetJudulIdkategoriIdunit($id);
        $this->load->view('User/isiJudulIdKategori', $data);
    }

    public function Data($idKategoriData, $idJudulData)
    {
        $idUnitKerja = $this->session->userdata('idUnitKerja');
        $data['GetDataIdJudul'] = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();
        $data['GetElemenData'] = $this->M_crud_Data->GetElemenData($idUnitKerja, $idKategoriData, $idJudulData);
        $data['GetDataSigaDetail'] = $this->M_crud_Data->GetDataSigaDetail($idKategoriData, $idJudulData);
        $this->load->view('User/dataSigaDetail', $data);
    }

    public function SimpanDataSiga()
    {
        if (isset($_POST['proses'])) {
            $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
            $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
            $hasil = $this->M_crud_Data->SimpanDataSiga();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/DataSigaUser/Data/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
                </script>
            <?php
            }
        }
    }


    public function SimpanUbahSiga()
    {
        if (isset($_POST['proses'])) {
            $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
            $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
            $hasil = $this->M_crud_Data->SimpanUbahSiga();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/DataSigaUser/Data/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
                </script>
            <?php
            }
        }
    }

    public function HapusDataSiga($idDataDasar, $idKategoriData, $idJudulData)
    {
        $hasil = $this->M_crud_Data->HapusDataSiga($idDataDasar);
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location =
                    "<?php echo base_url() ?>adminpanel/DataSigaUser/Data/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
            </script>
            <?php
        }
    }
    public function GetDataIdSiga()
    {
        $id = $this->input->post('id');
        $idUnitKerja = $this->session->userdata('idUnitKerja');
        $idKategoriData = $this->input->post('idkate');
        $idJudulData = $this->input->post('idjudul');
        $data['GetDataIdSiga'] = $this->M_crud_Data->GetDataIdSiga($id)->row();
        $data['GetElemenData'] = $this->M_crud_Data->GetElemenData($idUnitKerja, $idKategoriData, $idJudulData);
        $this->load->view('User/modal/EditIsiDataSiga', $data);
    }

    ///elemen data 

    public function ElemenData($idUnitKerja, $idKategoriData, $idJudulData)
    {
        $data['GetDataIdUnit'] = $this->M_crud_unit->GetDataIdUnit($idUnitKerja)->row();
        $data['GetDataIdKategori'] = $this->M_crud_kategoriData->GetDataIdKategori($idKategoriData)->row();
        $data['GetDataIdJudul'] = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();
        $data['GetElemenData'] = $this->M_crud_Data->GetElemenData($idUnitKerja, $idKategoriData, $idJudulData);
        $this->load->view('User/dataElemenData', $data);
    }

    public function SimpanElemenData()
    {
        if (isset($_POST['proses'])) {
            $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
            $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
            $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
            $hasil = $this->M_crud_Data->SimpanElemenData();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location =
                        "<?php echo base_url() ?>adminpanel/DataSigaUser/ElemenData/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
                </script>
            <?php
            }
        }
    }


    public function GetpesanHapus()
    {
        $id = $this->input->post('id');
        $data['GetElemenDataId'] = $this->M_crud_Data->GetElemenDataId($id)->row();
        $this->load->view('User/modal/DataPesanHapus', $data);
    }


    public function HapusElemenData($id, $idUnitKerja, $idKategoriData, $idJudulData)
    {
        $hasil = $this->M_crud_Data->HapusElemenData($id);
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location =
                    "<?php echo base_url() ?>adminpanel/DataSigaUser/ElemenData/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
            </script>
            <?php
        }
    }

    public function GetElemenDataId()
    {
        $id = $this->input->post('id');
        $data['GetElemenDataId'] = $this->M_crud_Data->GetElemenDataId($id)->row();
        $this->load->view('User/modal/isiEditElemenData', $data);
    }

    public function SimpanUbahElemenData()
    {
        if (isset($_POST['proses'])) {
            $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
            $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
            $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
            $hasil = $this->M_crud_Data->SimpanUbahElemenData();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location =
                        "<?php echo base_url() ?>adminpanel/DataSigaUser/ElemenData/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
                </script>
<?php
            }
        }
    }
}





/* copy reg juhendra utama*/
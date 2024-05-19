<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class DataSigaAdmin extends CI_Controller
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

    public function Index()
    {
        $data['GetDataunit'] = $this->M_crud_unit->GetDataunit();
        $this->load->view('admin/dataSigaHome', $data);
    }

    public function Kategori($idUnitKerja)
    {
        $data['GetDataIdUnit'] = $this->M_crud_unit->GetDataIdUnit($idUnitKerja)->row();
        $data['GetJudulSigaIdunit'] = $this->M_crud_JudulSiga->GetJudulSigaIdunit($idUnitKerja);
        $this->load->view('admin/dataSigaKategori', $data);
    }


    public function Data($idUnitKerja, $idKategoriData, $idJudulData)
    {
        $data['GetDataIdUnit'] = $this->M_crud_unit->GetDataIdUnit($idUnitKerja)->row();
        $data['GetDataIdKategori'] = $this->M_crud_kategoriData->GetDataIdKategori($idKategoriData)->row();
        $data['GetDataIdJudul'] = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();
        $data['GetElemenData'] = $this->M_crud_Data->GetElemenData($idUnitKerja, $idKategoriData, $idJudulData);
        $data['GetDataSigaDetail'] = $this->M_crud_Data->GetDataSigaDetailAdm($idUnitKerja, $idKategoriData, $idJudulData);
        $this->load->view('admin/dataSigaDetail', $data);
    }


    public function SimpanDataSiga()
    {
        if (isset($_POST['proses'])) {
            $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
            $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
            $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
            $hasil = $this->M_crud_Data->SimpanDataSiga();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location =
                        "<?php echo base_url() ?>adminpanel/DataSigaAdmin/Data/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
                </script>
            <?php
            }
        }
    }

    public function GetDataIdSiga()
    {
        $id = $this->input->post('id');
        $idUnitKerja = $this->input->post('idunit');
        $idKategoriData = $this->input->post('idkate');
        $idJudulData = $this->input->post('idjudul');
        $data['GetDataIdSiga'] = $this->M_crud_Data->GetDataIdSiga($id)->row();
        $data['GetElemenData'] = $this->M_crud_Data->GetElemenData($idUnitKerja, $idKategoriData, $idJudulData);
        $this->load->view('admin/modal/EditIsiDataSiga', $data);
    }

    public function SimpanUbahSiga()
    {
        if (isset($_POST['proses'])) {
            $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
            $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
            $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
            $hasil = $this->M_crud_Data->SimpanUbahSiga();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location =
                        "<?php echo base_url() ?>adminpanel/DataSigaAdmin/Data/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
                </script>
            <?php
            }
        }
    }

    public function HapusDataSiga($idDataDasar, $idUnitKerja, $idKategoriData, $idJudulData)
    {
        $hasil = $this->M_crud_Data->HapusDataSiga($idDataDasar);
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location =
                    "<?php echo base_url() ?>adminpanel/DataSigaAdmin/Data/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
            </script>
            <?php
        }
    }


    ///elemen data 

    public function ElemenData($idUnitKerja, $idKategoriData, $idJudulData)
    {
        $data['GetDataIdUnit'] = $this->M_crud_unit->GetDataIdUnit($idUnitKerja)->row();
        $data['GetDataIdKategori'] = $this->M_crud_kategoriData->GetDataIdKategori($idKategoriData)->row();
        $data['GetDataIdJudul'] = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();
        $data['GetElemenData'] = $this->M_crud_Data->GetElemenData($idUnitKerja, $idKategoriData, $idJudulData);
        $this->load->view('admin/dataElemenData', $data);
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
                        "<?php echo base_url() ?>adminpanel/DataSigaAdmin/ElemenData/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
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
                    "<?php echo base_url() ?>adminpanel/DataSigaAdmin/ElemenData/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
            </script>
            <?php
        }
    }

    public function GetElemenDataId()
    {
        $id = $this->input->post('id');
        $data['GetElemenDataId'] = $this->M_crud_Data->GetElemenDataId($id)->row();
        $this->load->view('admin/modal/isiEditElemenData', $data);
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
                        "<?php echo base_url() ?>adminpanel/DataSigaAdmin/ElemenData/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
                </script>
<?php
            }
        }
    }
}





/* copy reg juhendra utama*/
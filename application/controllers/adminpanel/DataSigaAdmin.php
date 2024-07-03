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


    public function SimpanDataSiga()
    {
        if (isset($_POST['proses'])) {
            $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
            $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
            $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));

            $datajudul = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();
            $hasil = false; // Inisialisasi variabel $hasil
            for ($i = 2; $i <= 53; $i++) {
                if ($datajudul->formatTabel == (string)$i) {
                    $methodName = 'SimpanDataSiga' . $i;
                    if (method_exists($this->M_crud_Data, $methodName)) {
                        $hasil = $this->M_crud_Data->$methodName();
                    } else {
                        // Handle the case where the method does not exist
                        $hasil = null;
                        // You can also log an error or throw an exception here
                    }
                    break; // Keluar dari loop setelah menemukan kecocokan
                }
            }
            if ($this->session->userdata('level') == '1') {
                if ($hasil) { ?>
                    <script type="text/javascript">
                        window.location =
                            "<?php echo base_url() ?>adminpanel/DataSigaAdmin/Data/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
                    </script>
                <?php
                }
            } else {
                if ($hasil) { ?>
                    <script type="text/javascript">
                        window.location =
                            "<?php echo base_url() ?>adminpanel/DataSigaUser/Data/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
                    </script>
                <?php
                }
            }
        }
    }

    public function HapusDataSiga($idSiga, $idUnitKerja, $idKategoriData, $idJudulData)
    {
        $datajudul = $this->M_crud_JudulSiga->GetDataIdJudul($idJudulData)->row();
        $hasil = false; // Inisialisasi variabel $hasil
        for ($i = 2; $i <= 53; $i++) {
            if ($datajudul->formatTabel == (string)$i) {
                $methodName = 'HapusDataSiga' . $i;
                if (method_exists($this->M_crud_Data, $methodName)) {
                    $hasil = $this->M_crud_Data->$methodName($idSiga, $idUnitKerja, $idKategoriData, $idJudulData);
                } else {
                    // Handle the case where the method does not exist
                    $hasil = null;
                    // You can also log an error or throw an exception here
                }
                break; // Keluar dari loop setelah menemukan kecocokan
            }
        }
        if ($this->session->userdata('level') == '1') {
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location =
                        "<?php echo base_url() ?>adminpanel/DataSigaAdmin/Data/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
                </script>
            <?php
            }
        } else {
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location =
                        "<?php echo base_url() ?>adminpanel/DataSigaUser/Data/<?= $idUnitKerja; ?>/<?= $idKategoriData; ?>/<?= $idJudulData; ?>";
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
}





/* copy reg juhendra utama*/
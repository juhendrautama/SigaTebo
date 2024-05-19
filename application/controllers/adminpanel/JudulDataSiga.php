<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class JudulDataSiga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
        $this->load->model('M_crud_kategoriData');
        $this->load->model('M_crud_JudulSiga');
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
        if ($this->session->userdata('level') == '1') {
            $data['GetUnitAll'] = $this->M_crud_unit->GetDataunit();
            $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
            $data['GetJudulSigaAll'] = $this->M_crud_JudulSiga->GetJudulSigaAll();
            $this->load->view('Admin/dataJudulSigaAdmin', $data);
        } else {
            $idUnitKerja = $this->session->userdata('idUnitKerja');
            $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
            $data['GetJudulSiga'] = $this->M_crud_JudulSiga->GetJudulSiga($idUnitKerja);
            $this->load->view('User/dataJudulSiga', $data);
        }
    }

    public function SimpanData()
    {
        if ($this->session->userdata('level') == '1') {
            if (isset($_POST['proses'])) {
                $hasil = $this->M_crud_JudulSiga->SimpanDataAdmin();
                if ($hasil) { ?>
<script type="text/javascript">
window.location = "<?php echo base_url() ?>adminpanel/JudulDataSiga";
</script>
<?php
                }
            }
        } else {
            if (isset($_POST['proses'])) {
                $hasil = $this->M_crud_JudulSiga->SimpanData();
                if ($hasil) { ?>
<script type="text/javascript">
window.location = "<?php echo base_url() ?>adminpanel/JudulDataSiga";
</script>
<?php
                }
            }
        }
    }

    public function GetDataIdJudul()
    {
        if ($this->session->userdata('level') == '1') {
            $id = $this->input->post('id');
            $data['GetUnitAll'] = $this->M_crud_unit->GetDataunit();
            $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
            $data['GetDataIdJudul'] = $this->M_crud_JudulSiga->GetDataIdJudul($id)->row();
            $this->load->view('Admin/modal/isiEditJudulSiga', $data);
        } else {
            $id = $this->input->post('id');
            $data['GetKategoriAll'] = $this->M_crud_kategoriData->GetKategoriAll();
            $data['GetDataIdJudul'] = $this->M_crud_JudulSiga->GetDataIdJudul($id)->row();
            $this->load->view('User/modal/isiEditJudulSiga', $data);
        }
    }

    public function SimpanUbahJudulSiga()
    {
        if ($this->session->userdata('level') == '1') {
            if (isset($_POST['proses'])) {
                $hasil = $this->M_crud_JudulSiga->SimpanUbahJudulSigaA();
                if ($hasil) { ?>
<script type="text/javascript">
window.location = "<?php echo base_url() ?>adminpanel/JudulDataSiga";
</script>
<?php
                }
            }
        } else {
            if (isset($_POST['proses'])) {
                $hasil = $this->M_crud_JudulSiga->SimpanUbahJudulSiga();
                if ($hasil) { ?>
<script type="text/javascript">
window.location = "<?php echo base_url() ?>adminpanel/JudulDataSiga";
</script>
<?php
                }
            }
        }
    }

    public function HapusDataKategori($id)
    {
        $hasil = $this->M_crud_JudulSiga->HapusDataKategori($id);
        if ($hasil) { ?>
<script type="text/javascript">
window.location = "<?php echo base_url() ?>adminpanel/JudulDataSiga";
</script>
<?php
        }
    }
}





/* copy reg juhendra utama*/
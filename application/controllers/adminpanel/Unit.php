<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Unit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
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
        $data['GetDataunit'] = $this->M_crud_unit->GetDataunit();
        $this->load->view('admin/dataUnit', $data);
    }

    public function SimpanData()
    {
        if (isset($_POST['proses'])) {
            $hasil = $this->M_crud_unit->SimpanData();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/Unit";
                </script>
            <?php
            }
        }
    }

    public function HapusData($id)
    {
        $hasil = $this->M_crud_unit->HapusData($id);
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>adminpanel/Unit";
            </script>
            <?php
        }
    }

    public function GetDataIdUnit()
    {
        $id = $this->input->post('id');
        $data['GetDataIdUnit'] = $this->M_crud_unit->GetDataIdUnit($id)->row();
        $this->load->view('admin/modal/isiEditunit', $data);
    }

    public function SimpanUbahUnit()
    {
        if (isset($_POST['proses'])) {
            $hasil = $this->M_crud_unit->SimpanUbahUnit();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/Unit";
                </script>
            <?php
            }
        }
    }

    public function Users($idUnit)
    {
        $data['GetDataIdUnit'] = $this->M_crud_unit->GetDataIdUnit($idUnit)->row();
        $data['GetUserIdUnit'] = $this->M_crud_unit->GetUserIdUnit($idUnit);
        $this->load->view('admin/UsersIdUnit', $data);
    }



    public function SimpanDataUser()
    {
        if (isset($_POST['proses'])) {
            $idUnit = $this->input->post('idUnitKerja');
            $hasil = $this->M_crud_unit->SimpanDataUser();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/Unit/Users/<?= $idUnit ?>";
                </script>
            <?php
            }
        }
    }

    public function GetDataIdUser()
    {
        $id = $this->input->post('id');
        $data['GetDataIdUser'] = $this->M_crud_unit->GetDataIdUser($id)->row();
        $this->load->view('admin/modal/isiEdituser', $data);
    }

    public function SimpanUbahUser()
    {
        if (isset($_POST['proses'])) {
            $idUnit = $this->input->post('idUnitKerja');
            $hasil = $this->M_crud_unit->SimpanUbahUser();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/Unit/Users/<?= $idUnit ?>";
                </script>
            <?php
            }
        }
    }

    public function HapusDataUser($id, $idUnitKerja)
    {
        $hasil = $this->M_crud_unit->HapusDataUser($id);
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>adminpanel/Unit/Users/<?= $idUnitKerja ?>";
            </script>
<?php
        }
    }
}





/* copy reg juhendra utama*/
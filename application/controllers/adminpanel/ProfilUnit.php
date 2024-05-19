<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class ProfilUnit extends CI_Controller
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
        $id = $this->session->userdata('idUnitKerja');
        $data['GetDataIdUnit'] = $this->M_crud_unit->GetDataIdUnit($id)->row();
        $this->load->view('User/ProfilUnit', $data);
    }



    public function SimpanUbahUnit()
    {
        if (isset($_POST['proses'])) {
            $hasil = $this->M_crud_unit->SimpanUbahUnit();
            if ($hasil) { ?>
                <script type="text/javascript">
                    alert('Data Diubah');
                    window.location = "<?php echo base_url() ?>adminpanel/ProfilUnit";
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
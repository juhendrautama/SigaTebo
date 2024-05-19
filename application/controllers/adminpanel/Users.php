<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller
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
        $data['GetUserAll'] = $this->M_crud_admin->GetUserAll();
        $this->load->view('admin/dataUserAll', $data);
    }

    public function SimpanData()
    {
        if (isset($_POST['proses'])) {
            $hasil = $this->M_crud_admin->SimpanData();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/Users";
                </script>
            <?php
            }
        }
    }

    public function GetDataIdUser()
    {
        $id = $this->input->post('id');
        $data['GetDataunit'] = $this->M_crud_unit->GetDataunit();
        $data['GetDataIdUser'] = $this->M_crud_admin->GetDataIdUser($id)->row();
        $this->load->view('admin/modal/isiEdituserall', $data);
    }

    public function SimpanUbahUser()
    {
        if (isset($_POST['proses'])) {
            $hasil = $this->M_crud_admin->SimpanUbahUser();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/Users";
                </script>
            <?php
            }
        }
    }

    public function HapusData($id)
    {
        $hasil = $this->M_crud_admin->HapusData($id);
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>adminpanel/Users";
            </script>
<?php
        }
    }
}





/* copy reg juhendra utama*/
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class UsersGetOPD extends CI_Controller
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
        $id = $this->session->userdata('id_admin');
        $data['GetDataIdUser'] = $this->M_crud_admin->GetDataIdUser($id)->row();
        $this->load->view('User/UserOpd', $data);
    }

    public function SimpanUbahUser()
    {
        if (isset($_POST['proses'])) {
            $hasil = $this->M_crud_admin->SimpanUbahUser();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/UsersGetOPD";
                </script>
<?php
            }
        }
    }
}





/* copy reg juhendra utama*/
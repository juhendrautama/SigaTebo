<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class DataKec extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
        $this->load->model('M_crud_wilayah');
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
        $data['GetDataKec'] = $this->M_crud_wilayah->GetDataKec();
        $this->load->view('admin/dataKec', $data);
    }

    public function SimpanData()
    {
        if (isset($_POST['proses'])) {
            $hasil = $this->M_crud_wilayah->SimpanData();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location =
                        "<?php echo base_url() ?>/adminpanel/DataKec";
                </script>
            <?php
            }
        }
    }

    public function HapusData($id)
    {
        $hasil = $this->M_crud_wilayah->HapusData($id);
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>adminpanel/DataKec";
            </script>
<?php
        }
    }
}





/* copy reg juhendra utama*/
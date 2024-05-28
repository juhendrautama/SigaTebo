<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class DataPublikasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
        $this->load->model('M_crud_publikasi');
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
        $data['GetDataPublikasi'] = $this->M_crud_publikasi->GetDataPublikasi();
        $this->load->view('admin/dataPublikasi', $data);
    }

    public function TampilData()
    {

        $this->load->view('admin/dataPublikasi', $data);
    }

    public function SimpanDataPublikasi()
    {
        if (isset($_POST['proses'])) {
            $Uploadfile = $this->M_crud_publikasi->Uploadfile();
            $hasil = $this->M_crud_publikasi->SimpanDataPublikasi($Uploadfile);
            if ($hasil) {
?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/DataPublikasi";
                </script>
            <?php
            }
        }
    }

    public function HapusData($id_publikasi)
    {
        $hasil = $this->M_crud_publikasi->HapusData($id_publikasi);
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location =
                    "<?php echo base_url() ?>adminpanel/DataPublikasi";
            </script>
<?php
        }
    }
}





/* copy reg juhendra utama*/
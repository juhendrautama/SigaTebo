<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class KategoriData extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
        $this->load->model('M_crud_kategoriData');
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
        $this->load->view('admin/dataKategori', $data);
    }

    public function SimpanData()
    {
        if (isset($_POST['proses'])) {
            $hasil = $this->M_crud_kategoriData->SimpanData();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/KategoriData";
                </script>
            <?php
            }
        }
    }

    public function GetDataIdKategori()
    {
        $id = $this->input->post('id');
        $data['GetDataIdKategori'] = $this->M_crud_kategoriData->GetDataIdKategori($id)->row();
        $this->load->view('admin/modal/isiEditKetegori', $data);
    }

    public function SimpanUbahK()
    {
        if (isset($_POST['proses'])) {
            $hasil = $this->M_crud_kategoriData->SimpanUbahK();
            if ($hasil) { ?>
                <script type="text/javascript">
                    window.location = "<?php echo base_url() ?>adminpanel/KategoriData";
                </script>
            <?php
            }
        }
    }

    public function HapusDatak($id)
    {
        $hasil = $this->M_crud_kategoriData->HapusDatak($id);
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>adminpanel/KategoriData";
            </script>
<?php
        }
    }
}





/* copy reg juhendra utama*/
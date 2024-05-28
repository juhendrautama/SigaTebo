<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_publikasi extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetDataPublikasi()
    {
        $hsl = $this->db->query("SELECT `id_publikasi`, `judul`, `file`, `id_admin`, `tgl` FROM `tbl_publikasi`");
        return $hsl;
    }

    function Uploadfile()
    {
        $config['upload_path'] = 'file_upload';
        $config['allowed_types'] = 'pdf';
        $config['max_size']    = '100000';
        $config['max_width']  = '100000';
        $config['max_height']  = '100000';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            $this->load->view('admin/modal/TambahPublikasi');
        }
    }

    function SimpanDataPublikasi()
    {
        $judul = $this->db->escape_str($this->input->post('judul'));
        $dt = $this->upload->data();
        $file = $dt['orig_name'];
        $id_admin = $this->db->escape_str($this->input->post('id_admin'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_publikasi`(`id_publikasi`, `judul`, `file`, `id_admin`, `tgl`) VALUES (NULL,'$judul','$file','1','$tgl')
        ");
        return $sql;
    }

    function HapusData($id_publikasi)
    {
        $this->db->where('id_publikasi', $id_publikasi);
        $query = $this->db->get('tbl_publikasi');
        $row = $query->row();
        if ($row->file == '') {
            $hasil = $this->db->query("delete from tbl_publikasi where id_publikasi = '$id_publikasi' ");
        } else {
            unlink("file_upload/$row->file");
            $hasil = $this->db->query("delete from tbl_publikasi where id_publikasi = '$id_publikasi' ");
        }
        return $hasil;
    }
}

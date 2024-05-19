<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_kategoriData extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetKategoriAll()
    {
        $hsl = $this->db->query("SELECT `idKategoriData`, `nama`,`Ket`, `tgl` FROM `tbl_kategoriData`");
        return $hsl;
    }

    function SimpanData()
    {
        $nama = $this->db->escape_str($this->input->post('nama'));
        $Ket = $this->db->escape_str($this->input->post('Ket'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("INSERT INTO `tbl_kategoriData`(`idKategoriData`, `nama`,`Ket`, `tgl`) VALUES (NULL,'$nama','$Ket','$tgl') 
        ");
        return $sql;
    }

    function GetDataIdKategori($id)
    {
        $hsl = $this->db->query("SELECT `idKategoriData`, `nama`,`Ket`, `tgl` FROM `tbl_kategoriData` where idKategoriData='$id' ");
        return $hsl;
    }

    function SimpanUbahK()
    {
        $id = $this->db->escape_str($this->input->post('id'));
        $nama = $this->db->escape_str($this->input->post('nama'));
        $Ket = $this->db->escape_str($this->input->post('Ket'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        UPDATE `tbl_kategoriData` 
        SET 
        `nama`='$nama',
        `Ket`='$Ket',
        `tgl`='$tgl'
        where
        idKategoriData = '$id'  
        ");
        return $sql;
    }

    function HapusDataK($id)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_kategoriData` WHERE idKategoriData='$id'");
        return $sql;
    }



    //login user 
    function GetKategoriUserAll()
    {
        $hsl = $this->db->query("
        SELECT tbl_kategoriData.idKategoriData, tbl_kategoriData.nama, COUNT(tbl_judulData.idJudulData) AS jumlah_data
        FROM tbl_kategoriData
        LEFT JOIN tbl_judulData ON tbl_kategoriData.idKategoriData = tbl_judulData.idKategoriData
        GROUP BY tbl_kategoriData.idKategoriData, tbl_kategoriData.nama;

        ");
        return $hsl;
    }
}

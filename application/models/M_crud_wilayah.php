<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_wilayah extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetDataKec()
    {
        $hsl = $this->db->query("SELECT `idKec`, `namaKec`, `jumdesa`, `jumkel`, `luas`, `jumdusun`, `jumrt`, `jumrw`,`statusData`,`tgl` FROM `tbl_kecTebo` where statusData='1'");
        return $hsl;
    }

    function GetDatauptPuskesmas()
    {
        $hsl = $this->db->query("SELECT `idPuskesmas`, `nama`, `tgl` FROM `tbl_uptPuskesmas`");
        return $hsl;
    }

    function SimpanData()
    {
        $namaKec = $this->db->escape_str($this->input->post('namaKec'));
        $jumdesa = $this->db->escape_str($this->input->post('jumdesa'));
        $jumkel = $this->db->escape_str($this->input->post('jumkel'));
        $luas = $this->db->escape_str($this->input->post('luas'));
        $jumdusun = $this->db->escape_str($this->input->post('jumdusun'));
        $jumrt = $this->db->escape_str($this->input->post('jumrt'));
        $jumrw = $this->db->escape_str($this->input->post('jumrw'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("INSERT INTO `tbl_kecTebo`(`idKec`, `namaKec`, `jumdesa`, `jumkel`, `luas`, `jumdusun`, `jumrt`, `jumrw`,`statusData`,`tgl`) VALUES (NULL,'$namaKec','$jumdesa','$jumkel','$luas','$jumdusun','$jumrt','$jumrw','1','$tgl')");
        return $sql;
    }


    function UbahStatus($id)
    {
        $sql = $this->db->query("
        UPDATE `tbl_kecTebo` SET `statusData`='2' WHERE `idKec`='$id'
        ");
        return $sql;
    }

    // function HapusData($id)
    // {
    //     $sql = $this->db->query(" DELETE FROM `tbl_kecTebo` WHERE idKec='$id'");
    //     return $sql;
    // }

    function GetData()
    {
        $districts = array(
            array('id' => '1508010', 'regency_id' => '1508', 'name' => 'TEBO ILIR'),
            array('id' => '1508011', 'regency_id' => '1508', 'name' => 'MUARA TABIR'),
            array('id' => '1508020', 'regency_id' => '1508', 'name' => 'TEBO TENGAH'),
            array('id' => '1508021', 'regency_id' => '1508', 'name' => 'SUMAY'),
            array('id' => '1508022', 'regency_id' => '1508', 'name' => 'TENGAH ILIR'),
            array('id' => '1508030', 'regency_id' => '1508', 'name' => 'RIMBO BUJANG'),
            array('id' => '1508031', 'regency_id' => '1508', 'name' => 'RIMBO ULU'),
            array('id' => '1508032', 'regency_id' => '1508', 'name' => 'RIMBO ILIR'),
            array('id' => '1508040', 'regency_id' => '1508', 'name' => 'TEBO ULU'),
            array('id' => '1508041', 'regency_id' => '1508', 'name' => 'VII KOTO'),
            array('id' => '1508042', 'regency_id' => '1508', 'name' => 'SERAI SERUMPUN'),
            array('id' => '1508043', 'regency_id' => '1508', 'name' => 'VII KOTO ILIR')
        );
        return $districts;
    }
}

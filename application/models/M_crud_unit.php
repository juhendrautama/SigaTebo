<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_unit extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetDataunit()
    {
        $hsl = $this->db->query("SELECT `idUnitKerja`, `namaUnit`, `alamat`, `lat`, `long`, `tgl` FROM `tbl_unitKerja`");
        return $hsl;
    }

    function SimpanData()
    {
        $namaUnit = $this->db->escape_str($this->input->post('namaUnit'));
        $alamat = $this->db->escape_str($this->input->post('alamat'));
        $lat = $this->db->escape_str($this->input->post('lat'));
        $long = $this->db->escape_str($this->input->post('long'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("INSERT INTO `tbl_unitKerja`(`idUnitKerja`, `namaUnit`, `alamat`, `lat`, `long`, `tgl`) VALUES (NULL,'$namaUnit','$alamat','$lat','$long','$tgl')");
        return $sql;
    }

    function HapusData($id)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_unitKerja` WHERE idUnitKerja='$id'");
        return $sql;
    }

    function GetDataIdUnit($id)
    {
        $hsl = $this->db->query("SELECT `idUnitKerja`, `namaUnit`, `alamat`, `lat`, `long`, `tgl` FROM `tbl_unitKerja` where idUnitKerja='$id'");
        return $hsl;
    }

    function SimpanUbahUnit()
    {
        $id = $this->db->escape_str($this->input->post('id'));
        $namaUnit = $this->db->escape_str($this->input->post('namaUnit'));
        $alamat = $this->db->escape_str($this->input->post('alamat'));
        $lat = $this->db->escape_str($this->input->post('lat'));
        $long = $this->db->escape_str($this->input->post('long'));
        $sql = $this->db->query("
        UPDATE `tbl_unitKerja` 
        SET 
        `namaUnit`='$namaUnit',
        `alamat`='$alamat',
        `lat`='$lat',
        `long`='$long'
        where
        idUnitKerja = '$id'  
        ");
        return $sql;
    }


    // users
    function GetUserIdUnit($idUnit)
    {
        $hsl = $this->db->query("SELECT `id_admin`, `idUnitKerja`, `nama_admin`, `user`, `pass`, `alamat`, `no_tlpn`, `level`,`KodeLogin`, `tgl` FROM `tbl_admin` WHERE idUnitKerja='$idUnit'");
        return $hsl;
    }

    function SimpanDataUser()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $nama_admin = $this->db->escape_str($this->input->post('nama_admin'));
        $user = $this->db->escape_str($this->input->post('user'));
        $pass = md5($_POST['pass']);
        $pass_samaran = $this->db->escape_str($this->input->post('pass'));
        $no_tlpn = $this->db->escape_str($this->input->post('no_tlpn'));
        $alamat = $this->db->escape_str($this->input->post('alamat'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("INSERT INTO `tbl_admin`(`id_admin`, `idUnitKerja`, `nama_admin`, `user`, `pass`,`pass_samaran`, `alamat`, `no_tlpn`, `level`, `tgl`) VALUES (NULL,'$idUnitKerja','$nama_admin','$user','$pass','$pass_samaran','$alamat','$no_tlpn','2','$tgl') 
        ");
        return $sql;
    }

    function GetDataIdUser($id)
    {
        $hsl = $this->db->query("SELECT `id_admin`, `idUnitKerja`, `nama_admin`, `user`, `pass`,`pass_samaran`, `alamat`, `no_tlpn`, `level`,`KodeLogin`, `tgl` FROM `tbl_admin` WHERE id_admin='$id'");
        return $hsl;
    }

    function SimpanUbahUser()
    {
        $id = $this->db->escape_str($this->input->post('id'));
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $nama_admin = $this->db->escape_str($this->input->post('nama_admin'));
        $user = $this->db->escape_str($this->input->post('user'));
        $pass = md5($_POST['pass']);
        $pass_samaran = $this->db->escape_str($this->input->post('pass'));
        $no_tlpn = $this->db->escape_str($this->input->post('no_tlpn'));
        $alamat = $this->db->escape_str($this->input->post('alamat'));
        $level = $this->db->escape_str($this->input->post('level'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        UPDATE `tbl_admin` 
        SET 
        `idUnitKerja`='$idUnitKerja',
        `nama_admin`='$nama_admin',
        `user`='$user',
        `pass`='$pass',
        `pass_samaran`='$pass_samaran',
        `no_tlpn`='$no_tlpn',
        `alamat`='$alamat',
        `level`='$level',
        `tgl`='$tgl'
        where
        id_admin = '$id'  
        ");
        return $sql;
    }

    function HapusDataUser($id)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_admin` WHERE id_admin='$id'");
        return $sql;
    }
}

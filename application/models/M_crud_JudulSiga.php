<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_JudulSiga extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function GetJudulSigaIdunit($idUnitKerja)
    {
        $hsl = $this->db->query("
        SELECT 
        tbl_judulData.`idJudulData`, 
        tbl_judulData.`id_admin`, 
        tbl_judulData.`idUnitKerja`, 
        tbl_judulData.`idKategoriData`, 
        tbl_judulData.`judul`, 
        tbl_judulData.`tgl`, 
        tbl_kategoriData.`nama`
        FROM 
        `tbl_judulData`
        JOIN 
        `tbl_kategoriData` ON tbl_judulData.`idKategoriData` = tbl_kategoriData.`idKategoriData`
        where tbl_judulData.`idUnitKerja`='$idUnitKerja' 
        ");
        return $hsl;
    }

    function GetJudulSigaAll()
    {
        $hsl = $this->db->query("
        SELECT 
        tbl_judulData.`idJudulData`, 
        tbl_judulData.`id_admin`, 
        tbl_judulData.`idUnitKerja`, 
        tbl_judulData.`idKategoriData`, 
        tbl_judulData.`judul`, 
        tbl_judulData.`tgl`, 
        tbl_kategoriData.`nama` AS `namaKategori`, 
        tbl_unitKerja.`namaUnit`, 
        tbl_unitKerja.`alamat`, 
        tbl_unitKerja.`lat`, 
        tbl_unitKerja.`long`, 
        tbl_unitKerja.`tgl` AS `tglUnitKerja`
        FROM 
        `tbl_judulData`
        JOIN 
        `tbl_kategoriData` ON tbl_judulData.`idKategoriData` = tbl_kategoriData.`idKategoriData`
        JOIN 
        `tbl_unitKerja` ON tbl_judulData.`idUnitKerja` = tbl_unitKerja.`idUnitKerja`;
    
        ");
        return $hsl;
    }

    function SimpanDataAdmin()
    {
        $id_admin = $this->session->userdata('id_admin');
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $judul = $this->db->escape_str($this->input->post('judul'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("INSERT INTO 
        `tbl_judulData`
        (`idJudulData`,`id_admin`,`idUnitKerja`, `idKategoriData`,  `judul`, `tgl`) 
        VALUES 
        (NULL,'$id_admin','$idUnitKerja','$idKategoriData','$judul','$tgl')");
        return $sql;
    }



    function GetJudulSiga($idUnitKerja)
    {
        $hsl = $this->db->query("
        SELECT 
        tbl_judulData.`idJudulData`, 
        tbl_judulData.`id_admin`, 
        tbl_judulData.`idUnitKerja`, 
        tbl_judulData.`idKategoriData`, 
        tbl_judulData.`judul`, 
        tbl_judulData.`tgl`, 
        tbl_kategoriData.`nama`
        FROM 
        `tbl_judulData`
        JOIN 
        `tbl_kategoriData` ON tbl_judulData.`idKategoriData` = tbl_kategoriData.`idKategoriData`
        WHERE 
        tbl_judulData.`idUnitKerja` = '$idUnitKerja';

        ");
        return $hsl;
    }

    function SimpanData()
    {
        $id_admin = $this->session->userdata('id_admin');
        $idUnitKerja = $this->session->userdata('idUnitKerja');
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $judul = $this->db->escape_str($this->input->post('judul'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("INSERT INTO 
        `tbl_judulData`
        (`idJudulData`,`id_admin`,`idUnitKerja`, `idKategoriData`,  `judul`, `tgl`) 
        VALUES 
        (NULL,'$id_admin','$idUnitKerja','$idKategoriData','$judul','$tgl')");
        return $sql;
    }

    function SimpanUbahJudulSigaA()
    {
        $id = $this->db->escape_str($this->input->post('id'));
        $id_admin = $this->session->userdata('id_admin');
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $judul = $this->db->escape_str($this->input->post('judul'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        UPDATE `tbl_judulData` 
        SET 
        `id_admin`='$id_admin',
        `idUnitKerja`='$idUnitKerja',
        `idKategoriData`='$idKategoriData',
        `judul`='$judul',
        `tgl`='$tgl'
        where
        idJudulData = '$id'  
        ");
        return $sql;
    }


    function HapusDataKategori($id)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_judulData` WHERE idJudulData='$id'");
        return $sql;
    }

    function GetDataIdJudul($id)
    {
        $hsl = $this->db->query("SELECT `idJudulData`,`id_admin`,`idUnitKerja`, `idKategoriData`,  `judul`, `tgl` FROM `tbl_judulData` where idJudulData='$id'");
        return $hsl;
    }

    function SimpanUbahJudulSiga()
    {
        $id = $this->db->escape_str($this->input->post('id'));
        $id_admin = $this->session->userdata('id_admin');
        $idUnitKerja = $this->session->userdata('idUnitKerja');
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $judul = $this->db->escape_str($this->input->post('judul'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        UPDATE `tbl_judulData` 
        SET 
        `id_admin`='$id_admin',
        `idUnitKerja`='$idUnitKerja',
        `idKategoriData`='$idKategoriData',
        `judul`='$judul',
        `tgl`='$tgl'
        where
        idJudulData = '$id'  
        ");
        return $sql;
    }


    //user
    function GetJudulIdkategoriIdunit($id)
    {
        $idUnitKerja = $this->session->userdata('idUnitKerja');
        $hsl = $this->db->query("SELECT `idJudulData`,`id_admin`,`idUnitKerja`, `idKategoriData`,  `judul`, `tgl` FROM `tbl_judulData` where idKategoriData='$id' and idUnitKerja='$idUnitKerja' ");
        return $hsl;
    }

    //depan
    function GetJudulIdkategoriAll($id)
    {
        $hsl = $this->db->query("SELECT `idJudulData`,`id_admin`,`idUnitKerja`, `idKategoriData`,  `judul`, `tgl` FROM `tbl_judulData` where idKategoriData='$id'  ");
        return $hsl;
    }

    function GetJudulDataCari($isicari)
    {
        $hsl = $this->db->query("SELECT `idJudulData`,`id_admin`,`idUnitKerja`, `idKategoriData`,  `judul`, `tgl` FROM `tbl_judulData` where `judul` LIKE '%$isicari%'  ");
        return $hsl;
    }

    function GetDataJudulAll()
    {
        $hsl = $this->db->query("SELECT `idJudulData`,`id_admin`,`idUnitKerja`, `idKategoriData`,  `judul`, `tgl` FROM `tbl_judulData`");
        return $hsl;
    }
}

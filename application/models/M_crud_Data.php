<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_Data extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function GetDataSigaDetailAdm($idUnitKerja, $idKategoriData, $idJudulData)
    {
        $hsl = $this->db->query("
        SELECT 
            tbl_dataDasarMaster.`idDataDasar`, 
            tbl_dataDasarMaster.`idUnitKerja`, 
            tbl_dataDasarMaster.`idKategoriData`, 
            tbl_dataDasarMaster.`idJudulData`, 
            tbl_dataDasarMaster.`idElemenData`, 
            tbl_elemenData.`nama`,  
            tbl_dataDasarMaster.`nilaiData`, 
            tbl_dataDasarMaster.`satuan`, 
            tbl_dataDasarMaster.`tgl`, 
            tbl_dataDasarMaster.`tgl_Input`
        FROM 
            `tbl_dataDasarMaster`
        JOIN 
            `tbl_elemenData` ON tbl_dataDasarMaster.`idElemenData` = tbl_elemenData.`idElemenData`
        WHERE 
            tbl_dataDasarMaster.`idUnitKerja` = '$idUnitKerja' 
            AND tbl_dataDasarMaster.`idKategoriData` = '$idKategoriData' 
            AND tbl_dataDasarMaster.`idJudulData` = '$idJudulData'

        ");
        return $hsl;
    }


    function GetDataSigaDetail($idKategoriData, $idJudulData)
    {
        $idUnitKerja = $this->session->userdata('idUnitKerja');
        $hsl = $this->db->query("
        SELECT 
            tbl_dataDasarMaster.`idDataDasar`, 
            tbl_dataDasarMaster.`idUnitKerja`, 
            tbl_dataDasarMaster.`idKategoriData`, 
            tbl_dataDasarMaster.`idJudulData`, 
            tbl_dataDasarMaster.`idElemenData`, 
            tbl_elemenData.`nama`,  
            tbl_dataDasarMaster.`nilaiData`, 
            tbl_dataDasarMaster.`satuan`, 
            tbl_dataDasarMaster.`tgl`, 
            tbl_dataDasarMaster.`tgl_Input`
        FROM 
            `tbl_dataDasarMaster`
        JOIN 
            `tbl_elemenData` ON tbl_dataDasarMaster.`idElemenData` = tbl_elemenData.`idElemenData`
        WHERE 
            tbl_dataDasarMaster.`idUnitKerja` = '$idUnitKerja' 
            AND tbl_dataDasarMaster.`idKategoriData` = '$idKategoriData' 
            AND tbl_dataDasarMaster.`idJudulData` = '$idJudulData'

        ");
        return $hsl;
    }

    function SimpanDataSiga()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));

        $idElemenData = $this->db->escape_str($this->input->post('idElemenData'));
        $nilaiData = $this->db->escape_str($this->input->post('nilaiData'));
        $satuan = $this->db->escape_str($this->input->post('satuan'));
        $tgl = $this->db->escape_str($this->input->post('tgl'));
        $tgl_Input = Date("Y-m-d");
        $sql = $this->db->query("INSERT INTO 
        `tbl_dataDasarMaster`
        (`idDataDasar`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idElemenData`, `nilaiData`, `satuan`, `tgl`, `tgl_Input`) 
        VALUES 
        (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idElemenData','$nilaiData','$satuan','$tgl','$tgl_Input')");
        return $sql;
    }


    function HapusDataSiga($idDataDasar)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_dataDasarMaster` WHERE idDataDasar='$idDataDasar'");
        return $sql;
    }

    function GetDataIdSiga($id)
    {
        $hsl = $this->db->query("SELECT `idDataDasar`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idElemenData`, `nilaiData`, `satuan`, `tgl`, `tgl_Input` FROM `tbl_dataDasarMaster` WHERE idDataDasar='$id'");
        return $hsl;
    }

    function SimpanUbahSiga()
    {
        $id = $this->db->escape_str($this->input->post('id'));
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));

        $idElemenData = $this->db->escape_str($this->input->post('idElemenData'));
        $nilaiData = $this->db->escape_str($this->input->post('nilaiData'));
        $satuan = $this->db->escape_str($this->input->post('satuan'));
        $tgl = $this->db->escape_str($this->input->post('tgl'));
        $tgl_Input = Date("Y-m-d");
        $sql = $this->db->query("
        UPDATE `tbl_dataDasarMaster` 
        SET 
        `idUnitKerja`='$idUnitKerja',
        `idKategoriData`='$idKategoriData',
        `idJudulData`='$idJudulData',
        `idElemenData`='$idElemenData',
        `nilaiData`='$nilaiData',
        `satuan`='$satuan',
        `tgl`='$tgl',
        `tgl_Input`='$tgl_Input'
        where
        idDataDasar = '$id'  
        ");
        return $sql;
    }

    //elemen data



    function GetElemenData($idUnitKerja, $idKategoriData, $idJudulData)
    {
        $hsl = $this->db->query("
        SELECT tbl_elemenData.idElemenData, tbl_elemenData.idUnitKerja, tbl_elemenData.idKategoriData, tbl_elemenData.idJudulData, tbl_elemenData.nama, tbl_elemenData.tgl, COUNT(tbl_dataDasarMaster.idElemenData) AS totalcount
        FROM tbl_elemenData
        LEFT JOIN tbl_dataDasarMaster ON tbl_elemenData.idElemenData = tbl_dataDasarMaster.idElemenData
        WHERE tbl_elemenData.idUnitKerja = '$idUnitKerja' 
        AND tbl_elemenData.idKategoriData = '$idKategoriData' 
        AND tbl_elemenData.idJudulData = '$idJudulData'
        GROUP BY tbl_elemenData.idElemenData, tbl_elemenData.idUnitKerja, tbl_elemenData.idKategoriData, tbl_elemenData.idJudulData, tbl_elemenData.nama, tbl_elemenData.tgl;
        ");
        return $hsl;
    }

    function SimpanElemenData()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));

        $nama = $this->db->escape_str($this->input->post('nama'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("INSERT INTO 
        `tbl_elemenData`
        (`idElemenData`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `nama`, `tgl`) 
        VALUES 
        (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$nama','$tgl')");
        return $sql;
    }

    function HapusElemenData($id)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_elemenData` WHERE idElemenData='$id'");
        return $sql;
    }

    function GetElemenDataId($id)
    {
        $hsl = $this->db->query("SELECT `idElemenData`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `nama`, `tgl` FROM `tbl_elemenData` WHERE idElemenData='$id'");
        return $hsl;
    }

    function SimpanUbahElemenData()
    {
        $id = $this->db->escape_str($this->input->post('id'));
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));

        $nama = $this->db->escape_str($this->input->post('nama'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        UPDATE `tbl_elemenData` 
        SET 
        `idUnitKerja`='$idUnitKerja',
        `idKategoriData`='$idKategoriData',
        `idJudulData`='$idJudulData',
        `nama`='$nama',
        `tgl`='$tgl'
        where
        idElemenData = '$id'  
        ");
        return $sql;
    }

    public function getDataMaster($idkategori, $idjuduldata)
    {
        return $this->db->query("SELECT a.*, e.nama FROM `tbl_datadasarmaster` a
        JOIN tbl_unitkerja b on b.idUnitKerja = a.idUnitKerja
        JOIN tbl_kategoridata c on c.idKategoriData = a.idKategoriData
        JOIN tbl_juduldata d on d.idJudulData = a.idJudulData
        JOIN tbl_elemendata e on e.idElemenData = a.idElemenData
        WHERE a.idKategoriData = $idkategori 
        AND a.idJudulData = $idjuduldata
        AND year(a.tgl) = year(curdate())
        ");
    }
}

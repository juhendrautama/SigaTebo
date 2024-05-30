<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_Data extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //QUERI TAMPIL DATA
    public function TampilSaga2($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga2`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`,
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga2.idKec ) as namaKec
        FROM `tbl_siga2` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    //QUERI TAMPIL DATA

    //QUERI SIMPAN DATA
    function SimpanDataSiga2()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga2`(`idSiga2`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }


    function SimpanDataSiga3()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga3`(`idSiga3`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga4()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $umur = $this->db->escape_str($this->input->post('umur'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga4`(`idSiga4`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`umur`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$umur','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga5()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga5`(`idSiga5`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga6()
    {

        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $kabupaten = $this->db->escape_str($this->input->post('kabupaten'));
        $ipm = $this->db->escape_str($this->input->post('ipm'));
        $ipg = $this->db->escape_str($this->input->post('ipg'));
        $idg = $this->db->escape_str($this->input->post('idg'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga6`(`idSiga6`, `idUnitKerja`,`idKategoriData`,`idJudulData`, `kabupaten`, `ipm`, `ipg`, `idg`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$kabupaten','$ipm','$ipg','$idg','$tahun','$tgl')
        ");
        return $sql;
    }
    //QUERI SIMPAN DATA

    //QUERI HAPUS DATA
    function HapusDataSiga2($idSiga)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_siga2` WHERE idSiga2='$idSiga'");
        return $sql;
    }
    //QUERI HAPUS DATA




    //DEPAN 
    public function getDataRezky($id_kategori, $id_juduldata, $tahunawal, $tahunakhir)
    {
        $tahuntengah = $tahunawal + 1;
        return $this->db->query("
        SELECT *, 
            (select sum(nilaiData) from tbl_dataDasarMaster b WHERE b.idElemenData = a.idElemenData AND YEAR(b.tgl) = '$tahunawal') as thn_1,
            (select sum(nilaiData) from tbl_dataDasarMaster b WHERE b.idElemenData = a.idElemenData AND YEAR(b.tgl) = '$tahuntengah') as thn_2,
            (select sum(nilaiData) from tbl_dataDasarMaster b WHERE b.idElemenData = a.idElemenData AND YEAR(b.tgl) = '$tahunakhir') as thn_3
        FROM tbl_elemenData a WHERE idKategoriData = '$id_kategori' and idJudulData = '$id_juduldata';
        ");
    }
}

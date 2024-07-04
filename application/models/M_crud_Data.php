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
    public function TampilSaga3($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga3`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`,
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga3.idKec ) as namaKec
        FROM `tbl_siga3` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga4($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga4`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`umur`, `nilai`, `tahun`, `tgl`,
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga4.idKec ) as namaKec
        FROM `tbl_siga4` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga5($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga5`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`nilai`, `tahun`, `tgl`,
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga5.idKec ) as namaKec
        FROM `tbl_siga5` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga6($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga6`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `kabupaten`, `ipm`, `ipg`, `idg`, `tahun`, `tgl` FROM `tbl_siga6`where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga7($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga7`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga7.idKec ) as namaKec,
        `usia`, `nilai`, `tahun`, `tgl` FROM `tbl_siga7` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga8($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga8`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga8.idKec ) as namaKec,
        `jenisPresentasi`, `nilai`, `tahun`, `tgl` FROM `tbl_siga8` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga9($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga9`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select nama from tbl_uptPuskesmas  WHERE tbl_uptPuskesmas.idPuskesmas = tbl_siga9.uptPuskesmas ) as uptPuskesmas,
        `jenisData`, `nilai`, `tahun`, `tgl` FROM `tbl_siga9` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga10($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga10`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga10.idKec ) as namaKec,
        `jenisData`, `nilai`, `tahun`, `tgl` FROM `tbl_siga10` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga11($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga11`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga11.idKec ) as namaKec,
        `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga11` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga12($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga12`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga12.idKec ) as namaKec,
        `jenisKelamin`, `usiaPernikahan`, `nilai`, `tahun`, `tgl` FROM `tbl_siga12` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga13($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga13`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga13.idKec ) as namaKec,
        `jenisData`, `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga13` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga14($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga14`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga14.idKec ) as namaKec,
        `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga14` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga15($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga15`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `kabupaten`, `jenisKelamin`, `jenisData`, `nilai`, `tahun`, `tgl` FROM `tbl_siga15` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga16($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga16`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `kabupaten`, `jenisKelamin`, `usia`, `nilai`, `tahun`, `tgl` FROM `tbl_siga16` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga17($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga17`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `kabupaten`, `jenisKelamin`, `pendidikan`, `nilai`, `tahun`, `tgl` FROM `tbl_siga17` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga18($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga18`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga18.idKec ) as namaKec,
        `jenisKelamin`, `jenisData`, `nilai`, `tahun`, `tgl` FROM `tbl_siga18` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga19($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga19`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga19.idKec ) as namaKec,
        `jenisKelamin`, `pendidikan`, `nilai`, `tahun`, `tgl` FROM `tbl_siga19` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga20($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga20`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga20.idKec ) as namaKec,
        `jenisSekolah`, `kategoriSekolah`, `nilai`, `tahun`, `tgl` FROM `tbl_siga20` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga21($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga21`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga21.idKec ) as namaKec,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga21` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga22($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga22`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga22.idKec ) as namaKec,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga22` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga23($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga23`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga23.idKec ) as namaKec,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga23` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga24($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga24`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga24.idKec ) as namaKec,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga24` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga25($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga25`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga25.idKec ) as namaKec,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga25` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga26($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga26`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga26.idKec ) as namaKec,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga26` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga27($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga27`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga27.idKec ) as namaKec,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga27` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga28($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga28`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga28.idKec ) as namaKec,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga28` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga29($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga29`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `pGolonganR`,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga29` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga30($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga30`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `pGolonganR`,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga30` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga31($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga31`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `partaipolitik`,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga31` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga32($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga32`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `komisi`,
        `jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga32` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga33($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga33`,`idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisData`,
        `nilai`,`tahun`, `tgl` FROM `tbl_siga33` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga34($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga34`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga34.idKec ) as namaKec,`jenisKelamin`,`nilai`, `tahun`, `tgl` FROM `tbl_siga34` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga35($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga35`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `wilayahUnit`, `jenisData`, `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga35` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga36($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga36`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `wilayahUnit`,`jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga36` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga37($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga37`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `wilayahUnitPengadilan`, `jenisData`, `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga37` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga38($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga38`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `wilayah`,`jenisData`,`jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga38` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga39($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga39`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `wilayah`,`jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga39` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga40($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga40`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisData`,`jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga40` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga41($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
       SELECT `idSiga41`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisData`, `pendidikan`,`nilai`, `tahun`, `tgl` FROM `tbl_siga41` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga42($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
       SELECT `idSiga42`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisData`, `umur`,`nilai`, `tahun`, `tgl` FROM `tbl_siga42` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga43($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
       SELECT `idSiga43`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisData`, `jenisKasus`,`nilai`, `tahun`, `tgl` FROM `tbl_siga43` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga44($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga44`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga44.idKec ) as namaKec,
        `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga44` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga45($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga45`, `idUnitKerja`, `idKategoriData`, `idJudulData`,`jenisKekerasan`,`jenisOrang`,`jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga45` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga46($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga46`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga46.idKec ) as namaKec,
        `jenisData`, `nilai`, `tahun`, `tgl` FROM `tbl_siga46` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga47($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga47`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga47.idKec ) as namaKec,
        `jenisData`, `nilai`, `tahun`, `tgl` FROM `tbl_siga47` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga48($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga48`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga48.idKec ) as namaKec,
        `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga48` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga49($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga49`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga49.idKec ) as namaKec,
        `JumlahAnak`, `MemilikiAkta`, `tahun`, `tgl` FROM `tbl_siga49` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga50($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga50`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga50.idKec ) as namaKec,
        `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga50` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga51($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga51`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga51.idKec ) as namaKec,
        `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga51` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    public function TampilSaga52($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga52`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga52.idKec ) as namaKec,
        `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga52` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }

    public function TampilSaga53($idUnitKerja, $idKategoriData, $idJudulData)
    {
        return $this->db->query("
        SELECT `idSiga53`, `idUnitKerja`, `idKategoriData`, `idJudulData`, 
        (select namaKec from tbl_kecTebo  WHERE tbl_kecTebo.idKec = tbl_siga53.idKec ) as namaKec,
        `jenisKelamin`, `nilai`, `tahun`, `tgl` FROM `tbl_siga53` where idUnitKerja='$idUnitKerja' and idKategoriData='$idKategoriData' and idUnitKerja='$idUnitKerja'
        ");
    }
    //TAMPIL DATA

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

    function SimpanDataSiga7()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $usia = $this->db->escape_str($this->input->post('usia'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga7`(`idSiga7`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `usia`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$usia','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga8()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisPresentasi = $this->db->escape_str($this->input->post('jenisPresentasi'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga8`(`idSiga8`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisPresentasi`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisPresentasi','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga9()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $uptPuskesmas = $this->db->escape_str($this->input->post('uptPuskesmas'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga9`(`idSiga9`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `uptPuskesmas`, `jenisData`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$uptPuskesmas','$jenisData','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga10()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga10`(`idSiga10`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisData`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisData','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga11()
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
        INSERT INTO `tbl_siga11`(`idSiga11`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga12()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $usiaPernikahan = $this->db->escape_str($this->input->post('usiaPernikahan'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga12`(`idSiga12`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`usiaPernikahan`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$usiaPernikahan','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga13()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));

        if ($jenisKelamin == 'L') {
            $jenisData = $this->input->post('jenisdataL');
        } else if ($jenisKelamin == 'P') {
            $jenisData = $this->input->post('jenisdataP');
        }

        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga13`(`idSiga13`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisData`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisData','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga14()
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
        INSERT INTO `tbl_siga14`(`idSiga14`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga15()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $kabupaten = $this->db->escape_str($this->input->post('kabupaten'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga15`(`idSiga15`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `kabupaten`, `jenisKelamin`,`jenisData`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$kabupaten','$jenisKelamin','$jenisData','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga16()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $kabupaten = $this->db->escape_str($this->input->post('kabupaten'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $usia = $this->db->escape_str($this->input->post('usia'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga16`(`idSiga16`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `kabupaten`, `jenisKelamin`,`usia`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$kabupaten','$jenisKelamin','$usia','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga17()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $kabupaten = $this->db->escape_str($this->input->post('kabupaten'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $pendidikan = $this->db->escape_str($this->input->post('pendidikan'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga17`(`idSiga17`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `kabupaten`, `jenisKelamin`,`pendidikan`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$kabupaten','$jenisKelamin','$pendidikan','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga18()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga18`(`idSiga18`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`jenisData`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$jenisData','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga19()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $pendidikan = $this->db->escape_str($this->input->post('pendidikan'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga19`(`idSiga19`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`pendidikan`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$pendidikan','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga20()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisSekolah = $this->db->escape_str($this->input->post('jenisSekolah'));
        $kategoriSekolah = $this->db->escape_str($this->input->post('kategoriSekolah'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga20`(`idSiga20`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisSekolah`,`kategoriSekolah`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisSekolah','$kategoriSekolah','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga21()
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
        INSERT INTO `tbl_siga21`(`idSiga21`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga22()
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
        INSERT INTO `tbl_siga22`(`idSiga22`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga23()
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
        INSERT INTO `tbl_siga23`(`idSiga23`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga24()
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
        INSERT INTO `tbl_siga24`(`idSiga24`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga25()
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
        INSERT INTO `tbl_siga25`(`idSiga25`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga26()
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
        INSERT INTO `tbl_siga26`(`idSiga26`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga27()
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
        INSERT INTO `tbl_siga27`(`idSiga27`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga28()
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
        INSERT INTO `tbl_siga28`(`idSiga28`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga29()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $pGolonganR = $this->db->escape_str($this->input->post('pGolonganR'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga29`(`idSiga29`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `pGolonganR`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$pGolonganR','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga30()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $pGolonganR = $this->db->escape_str($this->input->post('pGolonganR'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga30`(`idSiga30`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `pGolonganR`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$pGolonganR','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga31()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $partaipolitik = $this->db->escape_str($this->input->post('partaipolitik'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga31`(`idSiga31`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `partaipolitik`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$partaipolitik','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga32()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $komisi = $this->db->escape_str($this->input->post('komisi'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga32`(`idSiga32`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `komisi`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$komisi','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga33()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga33`(`idSiga33`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisData`, `nilai`,`tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$jenisData','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga34()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        // $jumDusun = $this->db->escape_str($this->input->post('jumDusun'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga34`(`idSiga34`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga35()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $wilayahUnit = $this->db->escape_str($this->input->post('wilayahUnit'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga35`(`idSiga35`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `wilayahUnit`,`jenisData`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$wilayahUnit','$jenisData','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga36()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $wilayahUnit = $this->db->escape_str($this->input->post('wilayahUnit'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga36`(`idSiga36`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `wilayahUnit`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$wilayahUnit','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga37()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $wilayahUnitPengadilan = $this->db->escape_str($this->input->post('wilayahUnitPengadilan'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga37`(`idSiga37`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `wilayahUnitPengadilan`,`jenisData`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$wilayahUnitPengadilan','$jenisData','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga38()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $wilayah = $this->db->escape_str($this->input->post('wilayah'));

        if ($wilayah == 'Perwira Tinggi (Pati)') {
            $jenisData = $this->db->escape_str($this->input->post('jenisdata1'));
        } else if ($wilayah == 'Perwira Menengah (Pamen)') {
            $jenisData = $this->db->escape_str($this->input->post('jenisdata2'));
        } else if ($wilayah == 'Perwira Pertama (Pama)') {
            $jenisData = $this->db->escape_str($this->input->post('jenisdata3'));
        } else if ($wilayah == 'Bintara') {
            $jenisData = $this->db->escape_str($this->input->post('jenisdata4'));
        }

        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga38`(`idSiga38`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `wilayah`,`jenisData`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$wilayah','$jenisData','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga39()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $wilayah = $this->db->escape_str($this->input->post('wilayah'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga39`(`idSiga39`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `wilayah`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$wilayah','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga40()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga40`(`idSiga40`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisData`, `jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$jenisData','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga41()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $pendidikan = $this->db->escape_str($this->input->post('pendidikan'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga41`(`idSiga41`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisData`,`pendidikan`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$jenisData','$pendidikan','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga42()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $umur = $this->db->escape_str($this->input->post('umur'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga42`(`idSiga42`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisData`,`umur`,`jenisKelamin`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$jenisData','$umur','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga43()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $jenisKasus = $this->db->escape_str($this->input->post('jenisKasus'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga43`(`idSiga43`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisData`,`jenisKasus`,`nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$jenisData','$jenisKasus','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga44()
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
        INSERT INTO `tbl_siga44`(`idSiga44`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga45()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $jenisKekerasan = $this->db->escape_str($this->input->post('jenisKekerasan'));
        $jenisOrang = $this->db->escape_str($this->input->post('jenisOrang'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga45`(`idSiga45`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `jenisKekerasan`,`jenisOrang`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$jenisKekerasan','$jenisOrang','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga46()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga46`(`idSiga46`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisData`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisData','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga47()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $jenisData = $this->db->escape_str($this->input->post('jenisData'));
        $nilai = $this->db->escape_str($this->input->post('nilai'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga47`(`idSiga47`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisData`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisData','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga48()
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
        INSERT INTO `tbl_siga48`(`idSiga48`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }


    function SimpanDataSiga49()
    {
        $idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
        $idKategoriData = $this->db->escape_str($this->input->post('idKategoriData'));
        $idJudulData = $this->db->escape_str($this->input->post('idJudulData'));
        $idKec = $this->db->escape_str($this->input->post('idKec'));
        $JumlahAnak = $this->db->escape_str($this->input->post('JumlahAnak'));
        $MemilikiAkta = $this->db->escape_str($this->input->post('MemilikiAkta'));
        $tahun = $this->db->escape_str($this->input->post('tahun'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_siga49`(`idSiga49`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `JumlahAnak`, `MemilikiAkta`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$JumlahAnak','$MemilikiAkta','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga50()
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
        INSERT INTO `tbl_siga50`(`idSiga50`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga51()
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
        INSERT INTO `tbl_siga51`(`idSiga51`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }
    function SimpanDataSiga52()
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
        INSERT INTO `tbl_siga52`(`idSiga52`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    function SimpanDataSiga53()
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
        INSERT INTO `tbl_siga53`(`idSiga53`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idKec`, `jenisKelamin`, `nilai`, `tahun`, `tgl`) VALUES (NULL,'$idUnitKerja','$idKategoriData','$idJudulData','$idKec','$jenisKelamin','$nilai','$tahun','$tgl')
        ");
        return $sql;
    }

    //SIMPAN DATA

    //QUERI HAPUS DATA
    function HapusDataSiga2($idSiga)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_siga2` WHERE idSiga2='$idSiga'");
        return $sql;
    }
    function HapusDataSiga3($idSiga)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_siga3` WHERE idSiga3='$idSiga'");
        return $sql;
    }
    function HapusDataSiga4($idSiga)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_siga4` WHERE idSiga4='$idSiga'");
        return $sql;
    }
    function HapusDataSiga5($idSiga)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_siga5` WHERE idSiga5='$idSiga'");
        return $sql;
    }
    function HapusDataSiga6($idSiga)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_siga6` WHERE idSiga6='$idSiga'");
        return $sql;
    }
    function HapusDataSiga7($idSiga)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_siga7` WHERE idSiga7='$idSiga'");
        return $sql;
    }
    function HapusDataSiga8($idSiga)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_siga8` WHERE idSiga8='$idSiga'");
        return $sql;
    }
    function HapusDataSiga9($idSiga)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_siga9` WHERE idSiga9='$idSiga'");
        return $sql;
    }
    function HapusDataSiga10($idSiga)
    {
        $sql = $this->db->query(" DELETE FROM `tbl_siga10` WHERE idSiga10='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga11($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga11` WHERE idSiga11='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga12($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga12` WHERE idSiga12='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga13($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga13` WHERE idSiga13='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga14($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga14` WHERE idSiga14='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga15($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga15` WHERE idSiga15='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga16($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga16` WHERE idSiga16='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga17($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga17` WHERE idSiga17='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga18($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga18` WHERE idSiga18='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga19($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga19` WHERE idSiga19='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga20($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga20` WHERE idSiga20='$idSiga'");
        return $sql;
    }
    public function HapusDataSiga21($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga21` WHERE idSiga21='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga22($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga22` WHERE idSiga22='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga23($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga23` WHERE idSiga23='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga24($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga24` WHERE idSiga24='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga25($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga25` WHERE idSiga25='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga26($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga26` WHERE idSiga26='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga27($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga27` WHERE idSiga27='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga28($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga28` WHERE idSiga28='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga29($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga29` WHERE idSiga29='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga30($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga30` WHERE idSiga30='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga31($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga31` WHERE idSiga31='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga32($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga32` WHERE idSiga32='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga33($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga33` WHERE idSiga33='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga34($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga34` WHERE idSiga34='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga35($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga35` WHERE idSiga35='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga36($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga36` WHERE idSiga36='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga37($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga37` WHERE idSiga37='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga38($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga38` WHERE idSiga38='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga39($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga39` WHERE idSiga39='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga40($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga40` WHERE idSiga40='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga41($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga41` WHERE idSiga41='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga42($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga42` WHERE idSiga42='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga43($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga43` WHERE idSiga43='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga44($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga44` WHERE idSiga44='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga45($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga45` WHERE idSiga45='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga46($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga46` WHERE idSiga46='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga47($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga47` WHERE idSiga47='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga48($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga48` WHERE idSiga48='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga49($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga49` WHERE idSiga49='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga50($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga50` WHERE idSiga50='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga51($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga51` WHERE idSiga51='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga52($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga52` WHERE idSiga52='$idSiga'");
        return $sql;
    }

    public function HapusDataSiga53($idSiga)
    {
        $sql = $this->db->query("DELETE FROM `tbl_siga53` WHERE idSiga53='$idSiga'");
        return $sql;
    }
    //QUERI HAPUS DATA




    // TAMPIL DEPAN 
    // public function getData2($id_kategori, $id_juduldata, $tahunawal, $tahunakhir)
    // {
    //     $tahuntengah = $tahunawal + 1;
    //     return $this->db->query("
    //     SELECT *, 
    //         (select sum(nilaiData) from tbl_dataDasarMaster b WHERE b.idElemenData = a.idElemenData AND YEAR(b.tgl) = '$tahunawal') as thn_1,
    //         (select sum(nilaiData) from tbl_dataDasarMaster b WHERE b.idElemenData = a.idElemenData AND YEAR(b.tgl) = '$tahuntengah') as thn_2,
    //         (select sum(nilaiData) from tbl_dataDasarMaster b WHERE b.idElemenData = a.idElemenData AND YEAR(b.tgl) = '$tahunakhir') as thn_3
    //     FROM tbl_elemenData a WHERE idKategoriData = '$id_kategori' and idJudulData = '$id_juduldata';
    //     ");
    // }

    public function getData2($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec, 
        SUM(CASE WHEN tbl_siga2.jenisKelamin = 'L' AND tbl_siga2.tahun = '2022' THEN tbl_siga2.nilai ELSE 0 END) AS nilai_count_L_2022,
        SUM(CASE WHEN tbl_siga2.jenisKelamin = 'P' AND tbl_siga2.tahun = '2022' THEN tbl_siga2.nilai ELSE 0 END) AS nilai_count_P_2022,
        SUM(CASE WHEN tbl_siga2.jenisKelamin = 'L' AND tbl_siga2.tahun = '2023' THEN tbl_siga2.nilai ELSE 0 END) AS nilai_count_L_2023,
        SUM(CASE WHEN tbl_siga2.jenisKelamin = 'P' AND tbl_siga2.tahun = '2023' THEN tbl_siga2.nilai ELSE 0 END) AS nilai_count_P_2023
        FROM 
            tbl_kecTebo 
        LEFT JOIN 
            tbl_siga2  ON tbl_kecTebo.idKec = tbl_siga2.idKec 
        WHERE 
            tbl_siga2.idKategoriData = '$id_kategori'  
            AND tbl_siga2.idJudulData = '$id_juduldata'
            AND tbl_siga2.tahun IN ('2022', '2023')
        GROUP BY 
            tbl_kecTebo.namaKec, 
            tbl_kecTebo.idKec;
    
        ");
    }

    public function getData3($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec, 
        SUM(CASE WHEN tbl_siga3.jenisKelamin = 'L' AND tbl_siga3.tahun = '2022' THEN tbl_siga3.nilai ELSE 0 END) AS nilai_count_L_2022,
        SUM(CASE WHEN tbl_siga3.jenisKelamin = 'P' AND tbl_siga3.tahun = '2022' THEN tbl_siga3.nilai ELSE 0 END) AS nilai_count_P_2022,
        SUM(CASE WHEN tbl_siga3.jenisKelamin = 'L' AND tbl_siga3.tahun = '2023' THEN tbl_siga3.nilai ELSE 0 END) AS nilai_count_L_2023,
        SUM(CASE WHEN tbl_siga3.jenisKelamin = 'P' AND tbl_siga3.tahun = '2023' THEN tbl_siga3.nilai ELSE 0 END) AS nilai_count_P_2023
        FROM 
            tbl_kecTebo 
        LEFT JOIN 
            tbl_siga3  ON tbl_kecTebo.idKec = tbl_siga3.idKec 
        WHERE 
            tbl_siga3.idKategoriData = '$id_kategori'  
            AND tbl_siga3.idJudulData = '$id_juduldata'
            AND tbl_siga3.tahun IN ('2022', '2023')
        GROUP BY 
            tbl_kecTebo.namaKec, 
            tbl_kecTebo.idKec;
    
        ");
    }

    public function getData4($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec,

        SUM(CASE 
                WHEN tbl_siga4.umur BETWEEN 0 AND 5 AND tbl_siga4.jenisKelamin = 'L' THEN tbl_siga4.nilai 
                ELSE 0 
            END) AS total_nilai_umur_0_5_L,
        SUM(CASE 
                WHEN tbl_siga4.umur BETWEEN 0 AND 5 AND tbl_siga4.jenisKelamin = 'P' THEN tbl_siga4.nilai 
                ELSE 0 
            END) AS total_nilai_umur_0_5_P,


        SUM(CASE 
                WHEN tbl_siga4.umur BETWEEN 6 AND 12 AND tbl_siga4.jenisKelamin = 'L' THEN tbl_siga4.nilai 
                ELSE 0 
            END) AS total_nilai_umur_6_12_L,
        SUM(CASE 
                WHEN tbl_siga4.umur BETWEEN 6 AND 12 AND tbl_siga4.jenisKelamin = 'P' THEN tbl_siga4.nilai 
                ELSE 0 
            END) AS total_nilai_umur_6_12_P,


        SUM(CASE 
                WHEN tbl_siga4.umur BETWEEN 13 AND 17 AND tbl_siga4.jenisKelamin = 'L' THEN tbl_siga4.nilai 
                ELSE 0 
            END) AS total_nilai_umur_13_17_L,
        SUM(CASE 
                WHEN tbl_siga4.umur BETWEEN 13 AND 17 AND tbl_siga4.jenisKelamin = 'P' THEN tbl_siga4.nilai 
                ELSE 0 
            END) AS total_nilai_umur_13_17_P,


        SUM(CASE 
                WHEN tbl_siga4.umur BETWEEN 18 AND 50 AND tbl_siga4.jenisKelamin = 'L' THEN tbl_siga4.nilai 
                ELSE 0 
            END) AS total_nilai_umur_18_50_L,
        SUM(CASE 
                WHEN tbl_siga4.umur BETWEEN 18 AND 50 AND tbl_siga4.jenisKelamin = 'P' THEN tbl_siga4.nilai 
                ELSE 0 
            END) AS total_nilai_umur_18_50_P,


        SUM(CASE 
                WHEN tbl_siga4.umur >= 51 AND tbl_siga4.jenisKelamin = 'L' THEN tbl_siga4.nilai 
                ELSE 0 
            END) AS total_nilai_umur_51_above_L,
        SUM(CASE 
                WHEN tbl_siga4.umur >= 51 AND tbl_siga4.jenisKelamin = 'P' THEN tbl_siga4.nilai 
                ELSE 0 
            END) AS total_nilai_umur_51_above_P
            
        FROM 
        tbl_kecTebo 
        LEFT JOIN 
        tbl_siga4 ON tbl_kecTebo.idKec = tbl_siga4.idKec 
        WHERE 
        tbl_siga4.idKategoriData = '$id_kategori'  
        AND tbl_siga4.idJudulData = '$id_juduldata'
        GROUP BY 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec;
        ");
    }

    public function getData5($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec, 
        SUM(CASE WHEN tbl_siga5.jenisKelamin = 'L' AND tbl_siga5.tahun = '2022' THEN tbl_siga5.nilai ELSE 0 END) AS nilai_count_L_2022,
        SUM(CASE WHEN tbl_siga5.jenisKelamin = 'P' AND tbl_siga5.tahun = '2022' THEN tbl_siga5.nilai ELSE 0 END) AS nilai_count_P_2022,
        SUM(CASE WHEN tbl_siga5.jenisKelamin = 'L' AND tbl_siga5.tahun = '2023' THEN tbl_siga5.nilai ELSE 0 END) AS nilai_count_L_2023,
        SUM(CASE WHEN tbl_siga5.jenisKelamin = 'P' AND tbl_siga5.tahun = '2023' THEN tbl_siga5.nilai ELSE 0 END) AS nilai_count_P_2023
        FROM 
            tbl_kecTebo 
        LEFT JOIN 
            tbl_siga5  ON tbl_kecTebo.idKec = tbl_siga5.idKec 
        WHERE 
            tbl_siga5.idKategoriData = '$id_kategori'  
            AND tbl_siga5.idJudulData = '$id_juduldata'
            AND tbl_siga5.tahun IN ('2022', '2023')
        GROUP BY 
            tbl_kecTebo.namaKec, 
            tbl_kecTebo.idKec;
    
        ");
    }

    public function getData6($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT kabupaten,
        SUM(CASE WHEN tahun = '2022' THEN ipm ELSE 0 END) AS total_ipm_2022,
        SUM(CASE WHEN tahun = '2022' THEN ipg ELSE 0 END) AS total_ipg_2022,
        SUM(CASE WHEN tahun = '2022' THEN idg ELSE 0 END) AS total_idg_2022,
        SUM(CASE WHEN tahun = '2023' THEN ipm ELSE 0 END) AS total_ipm_2023,
        SUM(CASE WHEN tahun = '2023' THEN ipg ELSE 0 END) AS total_ipg_2023,
        SUM(CASE WHEN tahun = '2023' THEN idg ELSE 0 END) AS total_idg_2023
    FROM 
        tbl_siga6
    WHERE 
        tahun IN ('2022', '2023')
        AND idKategoriData = '$id_kategori'
        AND idJudulData = '$id_juduldata';
    
    
        ");
    }

    public function getData7($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec,
        SUM(CASE 
                WHEN tbl_siga7.usia < 20 AND tbl_siga7.tahun = 2022 THEN tbl_siga7.nilai 
                ELSE 0 
            END) AS total_nilai_usia_lt_20_2022,
        SUM(CASE 
            WHEN tbl_siga7.usia BETWEEN 20 AND 35 AND tbl_siga7.tahun = 2022 THEN tbl_siga7.nilai 
            ELSE 0 
            END) AS total_nilai_usia_20_35_2022,            
        SUM(CASE 
            WHEN tbl_siga7.usia > 35 AND tbl_siga7.tahun = 2022 THEN tbl_siga7.nilai 
            ELSE 0 
            END) AS total_nilai_usia_gt_35_2022,
       


        SUM(CASE 
                WHEN tbl_siga7.usia BETWEEN 20 AND 35 AND tbl_siga7.tahun = 2023 THEN tbl_siga7.nilai 
                ELSE 0 
            END) AS total_nilai_usia_20_35_2023,
        SUM(CASE 
            WHEN tbl_siga7.usia < 20 AND tbl_siga7.tahun = 2023 THEN tbl_siga7.nilai 
            ELSE 0 
        END) AS total_nilai_usia_lt_20_2023,
        SUM(CASE 
                WHEN tbl_siga7.usia > 35 AND tbl_siga7.tahun = 2023 THEN tbl_siga7.nilai 
                ELSE 0 
            END) AS total_nilai_usia_gt_35_2023
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga7 ON tbl_kecTebo.idKec = tbl_siga7.idKec 
    WHERE 
        tbl_siga7.idKategoriData = '$id_kategori'  
        AND tbl_siga7.idJudulData = '$id_juduldata'
    GROUP BY 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec;
        ");
    }

    public function getData8($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec, 
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Eklamsia' AND tbl_siga8.tahun = 2023 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_Ek_2023,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Eklamsia' AND tbl_siga8.tahun = 2022 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_Ek_2022,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Infeksi' AND tbl_siga8.tahun = 2023 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_Infeksi_2023,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Infeksi' AND tbl_siga8.tahun = 2022 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_Infeksi_2022,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Aburtus' AND tbl_siga8.tahun = 2023 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_Aburtus_2023,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Aburtus' AND tbl_siga8.tahun = 2022 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_Aburtus_2022,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'P.Lama/Mace' AND tbl_siga8.tahun = 2023 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_PLamaMace_2023,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'P.Lama/Mace' AND tbl_siga8.tahun = 2022 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_PLamaMace_2022,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Emboli Obstertri' AND tbl_siga8.tahun = 2023 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_EmboliObstertri_2023,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Emboli Obstertri' AND tbl_siga8.tahun = 2022 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_EmboliObstertri_2022,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Kompi Masa PuePureu' AND tbl_siga8.tahun = 2023 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_KompiMasaPuePureu_2023,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Kompi Masa PuePureu' AND tbl_siga8.tahun = 2022 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_KompiMasaPuePureu_2022,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Lain Lain' AND tbl_siga8.tahun = 2023 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_LainLain_2023,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Lain Lain' AND tbl_siga8.tahun = 2022 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_LainLain_2022,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Pendarahan' AND tbl_siga8.tahun = 2023 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_Pendarahan_2023,
        SUM(CASE 
            WHEN tbl_siga8.nilai AND tbl_siga8.jenisPresentasi = 'Pendarahan' AND tbl_siga8.tahun = 2022 
            THEN tbl_siga8.nilai ELSE 0 
        END) AS total_nilai_Pendarahan_2022
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga8 
    ON 
        tbl_kecTebo.idKec = tbl_siga8.idKec 
    WHERE 
        tbl_siga8.idKategoriData = '$id_kategori' 
        AND tbl_siga8.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec;
        ");
    }

    public function getData9($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_uptPuskesmas.nama,
        SUM(CASE WHEN tbl_siga9.jenisData = 'Jumlah Kelahiran' AND tbl_siga9.tahun = 2022 THEN tbl_siga9.nilai ELSE 0 END) AS jumlah_kelahiran_2022,
        SUM(CASE WHEN tbl_siga9.jenisData = 'Jumlah Kelahiran' AND tbl_siga9.tahun = 2023 THEN tbl_siga9.nilai ELSE 0 END) AS jumlah_kelahiran_2023,
        SUM(CASE WHEN tbl_siga9.jenisData = 'Jumlah Persalinan' AND tbl_siga9.tahun = 2022 THEN tbl_siga9.nilai ELSE 0 END) AS jumlah_persalinan_2022,
        SUM(CASE WHEN tbl_siga9.jenisData = 'Jumlah Persalinan' AND tbl_siga9.tahun = 2023 THEN tbl_siga9.nilai ELSE 0 END) AS jumlah_persalinan_2023,
        SUM(CASE WHEN tbl_siga9.jenisData = 'Dokter' AND tbl_siga9.tahun = 2022 THEN tbl_siga9.nilai ELSE 0 END) AS dokter_2022,
        SUM(CASE WHEN tbl_siga9.jenisData = 'Dokter' AND tbl_siga9.tahun = 2023 THEN tbl_siga9.nilai ELSE 0 END) AS dokter_2023,
        SUM(CASE WHEN tbl_siga9.jenisData = 'Bidan' AND tbl_siga9.tahun = 2022 THEN tbl_siga9.nilai ELSE 0 END) AS bidan_2022,
        SUM(CASE WHEN tbl_siga9.jenisData = 'Bidan' AND tbl_siga9.tahun = 2023 THEN tbl_siga9.nilai ELSE 0 END) AS bidan_2023,
        SUM(CASE WHEN tbl_siga9.jenisData = 'Dukun' AND tbl_siga9.tahun = 2022 THEN tbl_siga9.nilai ELSE 0 END) AS dukun_2022,
        SUM(CASE WHEN tbl_siga9.jenisData = 'Dukun' AND tbl_siga9.tahun = 2023 THEN tbl_siga9.nilai ELSE 0 END) AS dukun_2023
    FROM 
        tbl_uptPuskesmas 
    LEFT JOIN 
        tbl_siga9 
    ON 
        tbl_uptPuskesmas.idPuskesmas = tbl_siga9.uptPuskesmas 
    WHERE 
        tbl_siga9.idKategoriData = '$id_kategori' 
        AND tbl_siga9.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_uptPuskesmas.nama
    
        ");
    }

    public function getData10($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec,
        SUM(CASE 
                WHEN tbl_siga10.nilai 
                AND tbl_siga10.jenisData = 'Bumil Kek' 
                AND tbl_siga10.tahun = 2022 
                THEN tbl_siga10.nilai ELSE 0 
            END) AS sum_nilai_bumil_kek_2022,
            
        SUM(CASE 
                WHEN tbl_siga10.nilai 
                AND tbl_siga10.jenisData = 'Bumil Kek' 
                AND tbl_siga10.tahun = 2023 
                THEN tbl_siga10.nilai ELSE 0 
            END) AS sum_nilai_bumil_kek_2023,
    
        SUM(CASE 
                WHEN tbl_siga10.nilai 
                AND tbl_siga10.jenisData = 'Bumil Risti' 
                AND tbl_siga10.tahun = 2022 
                THEN tbl_siga10.nilai ELSE 0 
            END) AS sum_nilai_bumil_risti_2022,
    
        SUM(CASE 
                WHEN tbl_siga10.nilai 
                AND tbl_siga10.jenisData = 'Bumil Risti' 
                AND tbl_siga10.tahun = 2023 
                THEN tbl_siga10.nilai ELSE 0 
            END) AS sum_nilai_bumil_risti_2023
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga10 
    ON 
        tbl_kecTebo.idKec = tbl_siga10.idKec 
    WHERE 
        tbl_siga10.idKategoriData = '$id_kategori' 
        AND tbl_siga10.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec;
    
    
        ");
    }

    public function getData11($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec,
    SUM(CASE 
        WHEN tbl_siga11.nilai 
        AND tbl_siga11.jenisKelamin = 'L' 
        AND tbl_siga11.tahun = 2022 
        THEN tbl_siga11.nilai ELSE 0 
    END) AS sum_nilai_HIV_L_2022,

    SUM(CASE 
        WHEN tbl_siga11.nilai 
        AND tbl_siga11.jenisKelamin = 'L' 
        AND tbl_siga11.tahun = 2023 
        THEN tbl_siga11.nilai ELSE 0 
    END) AS sum_nilai_HIV_L_2023,

    SUM(CASE 
        WHEN tbl_siga11.nilai 
        AND tbl_siga11.jenisKelamin = 'P' 
        AND tbl_siga11.tahun = 2022 
        THEN tbl_siga11.nilai ELSE 0 
    END) AS sum_nilai_HIV_P_2022,

    SUM(CASE 
        WHEN tbl_siga11.nilai 
        AND tbl_siga11.jenisKelamin = 'P' 
        AND tbl_siga11.tahun = 2023 
        THEN tbl_siga11.nilai ELSE 0 
    END) AS sum_nilai_HIV_P_2023

    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga11 
    ON 
        tbl_kecTebo.idKec = tbl_siga11.idKec 
    WHERE 
        tbl_siga11.idKategoriData = '$id_kategori' 
        AND tbl_siga11.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec, 
        tbl_kecTebo.idKec;
    
    
        ");
    }

    public function getData12($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
    tbl_kecTebo.namaKec, 
    tbl_kecTebo.idKec,
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan < 9 AND tbl_siga12.tahun = 2022 AND tbl_siga12.jenisKelamin = 'L'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_under_9_2022_L,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan < 9 AND tbl_siga12.tahun = 2022 AND tbl_siga12.jenisKelamin = 'P'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_under_9_2022_P,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan BETWEEN 19 AND 21 AND tbl_siga12.tahun = 2022 AND tbl_siga12.jenisKelamin = 'L'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_19_21_2022_L,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan BETWEEN 19 AND 21 AND tbl_siga12.tahun = 2022 AND tbl_siga12.jenisKelamin = 'P'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_19_21_2022_P,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan BETWEEN 21 AND 30 AND tbl_siga12.tahun = 2022 AND tbl_siga12.jenisKelamin = 'L'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_21_30_2022_L,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan BETWEEN 21 AND 30 AND tbl_siga12.tahun = 2022 AND tbl_siga12.jenisKelamin = 'P'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_21_30_2022_P,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan > 30 AND tbl_siga12.tahun = 2022 AND tbl_siga12.jenisKelamin = 'L'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_above_30_2022_L,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan > 30 AND tbl_siga12.tahun = 2022 AND tbl_siga12.jenisKelamin = 'P'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_above_30_2022_P,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan < 9 AND tbl_siga12.tahun = 2023 AND tbl_siga12.jenisKelamin = 'L'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_under_9_2023_L,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan < 9 AND tbl_siga12.tahun = 2023 AND tbl_siga12.jenisKelamin = 'P'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_under_9_2023_P,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan BETWEEN 19 AND 21 AND tbl_siga12.tahun = 2023 AND tbl_siga12.jenisKelamin = 'L'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_19_21_2023_L,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan BETWEEN 19 AND 21 AND tbl_siga12.tahun = 2023 AND tbl_siga12.jenisKelamin = 'P'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_19_21_2023_P,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan BETWEEN 21 AND 30 AND tbl_siga12.tahun = 2023 AND tbl_siga12.jenisKelamin = 'L'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_21_30_2023_L,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan BETWEEN 21 AND 30 AND tbl_siga12.tahun = 2023 AND tbl_siga12.jenisKelamin = 'P'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_21_30_2023_P,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan > 30 AND tbl_siga12.tahun = 2023 AND tbl_siga12.jenisKelamin = 'L'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_above_30_2023_L,
    
    SUM(CASE 
        WHEN tbl_siga12.nilai AND tbl_siga12.usiaPernikahan > 30 AND tbl_siga12.tahun = 2023 AND tbl_siga12.jenisKelamin = 'P'
        THEN tbl_siga12.nilai 
        ELSE 0 
    END) AS total_nilai_above_30_2023_P
FROM 
    tbl_kecTebo 
LEFT JOIN 
    tbl_siga12 
ON 
    tbl_kecTebo.idKec = tbl_siga12.idKec 
WHERE 
    tbl_siga12.idKategoriData = '$id_kategori' 
    AND tbl_siga12.idJudulData = '$id_juduldata'
GROUP BY 
    tbl_kecTebo.namaKec, 
    tbl_kecTebo.idKec;
        ");
    }

    public function getData13($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
        SUM(CASE 
            WHEN tbl_siga13.jenisData = 'Suntik' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2023
            THEN tbl_siga13.nilai 
            ELSE 0 
        END) AS total_nilai_Suntik_2023_P,
        SUM(CASE 
            WHEN tbl_siga13.jenisData = 'Pil' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2023
            THEN tbl_siga13.nilai 
            ELSE 0 
        END) AS total_nilai_Pil_2023_P,
        SUM(CASE 
            WHEN tbl_siga13.jenisData = 'Implan' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2023
            THEN tbl_siga13.nilai 
            ELSE 0 
        END) AS total_nilai_Implan_2023_P,
        SUM(CASE 
            WHEN tbl_siga13.jenisData = 'IUD' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2023
            THEN tbl_siga13.nilai 
            ELSE 0 
        END) AS total_nilai_IUD_2023_P,
       
        SUM(CASE 
            WHEN tbl_siga13.jenisData = 'Tubektomi' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2022
            THEN tbl_siga13.nilai 
            ELSE 0 
        END) AS total_nilai_Tubektomi_2022_P,
        SUM(CASE 
        WHEN tbl_siga13.jenisData = 'Tubektomi' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2023
        THEN tbl_siga13.nilai 
        ELSE 0 
    END) AS total_nilai_Tubektomi_2023_P,
        SUM(CASE 
            WHEN tbl_siga13.jenisData = 'Suntik' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2022
            THEN tbl_siga13.nilai 
            ELSE 0 
        END) AS total_nilai_Suntik_2022_P,
        SUM(CASE 
            WHEN tbl_siga13.jenisData = 'Pil' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2022
            THEN tbl_siga13.nilai 
            ELSE 0 
        END) AS total_nilai_Pil_2022_P,
        SUM(CASE 
            WHEN tbl_siga13.jenisData = 'Implan' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2022
            THEN tbl_siga13.nilai 
            ELSE 0 
        END) AS total_nilai_Implan_2022_P,
        SUM(CASE 
            WHEN tbl_siga13.jenisData = 'IUD' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2022
            THEN tbl_siga13.nilai 
            ELSE 0 
        END) AS total_nilai_IUD_2022_P,
        SUM(CASE 
            WHEN tbl_siga13.jenisData = 'Mal' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2022
            THEN tbl_siga13.nilai 
            ELSE 0 
        END) AS total_nilai_Mal_2022_P,
        SUM(CASE 
        WHEN tbl_siga13.jenisData = 'Mal' AND tbl_siga13.jenisKelamin = 'P' AND tbl_siga13.tahun = 2023
        THEN tbl_siga13.nilai 
        ELSE 0 
    END) AS total_nilai_Mal_2023_P,

SUM(CASE 
    WHEN tbl_siga13.jenisData = 'Kondom' AND tbl_siga13.jenisKelamin = 'L' AND tbl_siga13.tahun = 2023
    THEN tbl_siga13.nilai 
    ELSE 0 
END) AS total_nilai_Kondom_2023_L,
SUM(CASE 
    WHEN tbl_siga13.jenisData = 'Vasektomi' AND tbl_siga13.jenisKelamin = 'L' AND tbl_siga13.tahun = 2023
    THEN tbl_siga13.nilai 
    ELSE 0 
END) AS total_nilai_Vasektomi_2023_L,
SUM(CASE 
    WHEN tbl_siga13.jenisData = 'Kondom' AND tbl_siga13.jenisKelamin = 'L' AND tbl_siga13.tahun = 2022
    THEN tbl_siga13.nilai 
    ELSE 0 
END) AS total_nilai_Kondom_2022_L,
SUM(CASE 
    WHEN tbl_siga13.jenisData = 'Vasektomi' AND tbl_siga13.jenisKelamin = 'L' AND tbl_siga13.tahun = 2022
    THEN tbl_siga13.nilai 
    ELSE 0 
END) AS total_nilai_Vasektomi_2022_L

    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga13 
    ON 
        tbl_kecTebo.idKec = tbl_siga13.idKec 
    WHERE 
        tbl_siga13.idKategoriData = '$id_kategori' 
        AND tbl_siga13.idJudulData = '$id_juduldata'
    GROUP BY 
        tbl_kecTebo.namaKec;
    
        ");
    }
    public function getData14($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
    SUM(CASE 
        WHEN tbl_siga14.nilai  AND tbl_siga14.jenisKelamin = 'L' AND tbl_siga14.tahun = 2022
        THEN tbl_siga14.nilai 
        ELSE 0 
    END) AS total_nilai_2022_L,
    SUM(CASE 
        WHEN tbl_siga14.nilai  AND tbl_siga14.jenisKelamin = 'P' AND tbl_siga14.tahun = 2022
        THEN tbl_siga14.nilai 
        ELSE 0 
    END) AS total_nilai_2022_P,

    SUM(CASE 
        WHEN tbl_siga14.nilai  AND tbl_siga14.jenisKelamin = 'L' AND tbl_siga14.tahun = 2023
        THEN tbl_siga14.nilai 
    ELSE 0 
    END) AS total_nilai_2023_L,
    SUM(CASE 
        WHEN tbl_siga14.nilai  AND tbl_siga14.jenisKelamin = 'P' AND tbl_siga14.tahun = 2023
        THEN tbl_siga14.nilai 
    ELSE 0 
    END) AS total_nilai_2023_P
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga14 
    ON 
        tbl_kecTebo.idKec = tbl_siga14.idKec 
    WHERE 
        tbl_siga14.idKategoriData = '$id_kategori' 
        AND tbl_siga14.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec;
    
    
        ");
    }

    public function getData15($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'L' AND jenisData ='SD/MI'   THEN nilai ELSE 0 END) AS total_nilai_SD_MI_2023_L,
        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'P' AND jenisData ='SD/MI'   THEN nilai ELSE 0 END) AS total_nilai_SD_MI_2023_P,

        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'L' AND jenisData ='SLTP/MTS'   THEN nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2023_L,
        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'P' AND jenisData ='SLTP/MTS'   THEN nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2023_P,

        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'L' AND jenisData ='SMA/SMK/MA'   THEN nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2023_L,
        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'P' AND jenisData ='SMA/SMK/MA'   THEN nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2023_P,


        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'L' AND jenisData ='SD/MI'   THEN nilai ELSE 0 END) AS total_nilai_SD_MI_2022_L,
        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'P' AND jenisData ='SD/MI'   THEN nilai ELSE 0 END) AS total_nilai_SD_MI_2022_P,

        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'L' AND jenisData ='SLTP/MTS'   THEN nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2022_L,
        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'P' AND jenisData ='SLTP/MTS'   THEN nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2022_P,

        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'L' AND jenisData ='SMA/SMK/MA'   THEN nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2022_L,
        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'P' AND jenisData ='SMA/SMK/MA'   THEN nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2022_P

    FROM 
        tbl_siga15
    WHERE 
        kabupaten = 'Tebo' AND 
        idKategoriData = '$id_kategori' AND
        idJudulData = '$id_juduldata' ;
    
        ");
    }

    public function getData16($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        SUM(CASE WHEN nilai AND usia BETWEEN 7 AND 13 AND tahun = '2022' AND jenisKelamin = 'L' THEN nilai ELSE 0 END) AS total_nilai_usia_7_13_2022_L,
        SUM(CASE WHEN nilai AND usia BETWEEN 7 AND 13 AND tahun = '2022' AND jenisKelamin = 'P' THEN nilai ELSE 0 END) AS total_nilai_usia_7_13_2022_P,
        SUM(CASE WHEN nilai AND usia BETWEEN 13 AND 15 AND tahun = '2022' AND jenisKelamin = 'L' THEN nilai ELSE 0 END) AS total_nilai_usia_13_15_2022_L,
        SUM(CASE WHEN nilai AND usia BETWEEN 13 AND 15 AND tahun = '2022' AND jenisKelamin = 'P' THEN nilai ELSE 0 END) AS total_nilai_usia_13_15_2022_P,
        SUM(CASE WHEN nilai AND usia BETWEEN 16 AND 18 AND tahun = '2022' AND jenisKelamin = 'L' THEN nilai ELSE 0 END) AS total_nilai_usia_16_18_2022_L,
        SUM(CASE WHEN nilai AND usia BETWEEN 16 AND 18 AND tahun = '2022' AND jenisKelamin = 'P' THEN nilai ELSE 0 END) AS total_nilai_usia_16_18_2022_P,
        SUM(CASE WHEN nilai AND usia BETWEEN 7 AND 13 AND tahun = '2023' AND jenisKelamin = 'L' THEN nilai ELSE 0 END) AS total_nilai_usia_7_13_2023_L,
        SUM(CASE WHEN nilai AND usia BETWEEN 7 AND 13 AND tahun = '2023' AND jenisKelamin = 'P' THEN nilai ELSE 0 END) AS total_nilai_usia_7_13_2023_P,
        SUM(CASE WHEN nilai AND usia BETWEEN 13 AND 15 AND tahun = '2023' AND jenisKelamin = 'L' THEN nilai ELSE 0 END) AS total_nilai_usia_13_15_2023_L,
        SUM(CASE WHEN nilai AND usia BETWEEN 13 AND 15 AND tahun = '2023' AND jenisKelamin = 'P' THEN nilai ELSE 0 END) AS total_nilai_usia_13_15_2023_P,
        SUM(CASE WHEN nilai AND usia BETWEEN 16 AND 18 AND tahun = '2023' AND jenisKelamin = 'L' THEN nilai ELSE 0 END) AS total_nilai_usia_16_18_2023_L,
        SUM(CASE WHEN nilai AND usia BETWEEN 16 AND 18 AND tahun = '2023' AND jenisKelamin = 'P' THEN nilai ELSE 0 END) AS total_nilai_usia_16_18_2023_P
    FROM 
        tbl_siga16
    WHERE 
        kabupaten = 'Tebo' AND 
        idKategoriData = '$id_kategori' AND
        idJudulData = '$id_juduldata';
    
    
        ");
    }

    public function getData17($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'L' AND pendidikan ='SD/MI'   THEN nilai ELSE 0 END) AS total_nilai_SD_MI_2023_L,
        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'P' AND pendidikan ='SD/MI'   THEN nilai ELSE 0 END) AS total_nilai_SD_MI_2023_P,
    
        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'L' AND pendidikan ='SLTP/MTS'   THEN nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2023_L,
        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'P' AND pendidikan ='SLTP/MTS'   THEN nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2023_P,
    
        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'L' AND pendidikan ='SMA/SMK/MA'   THEN nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2023_L,
        SUM(CASE WHEN nilai AND tahun = 2023 AND jenisKelamin = 'P' AND pendidikan ='SMA/SMK/MA'   THEN nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2023_P,
    
    
        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'L' AND pendidikan ='SD/MI'   THEN nilai ELSE 0 END) AS total_nilai_SD_MI_2022_L,
        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'P' AND pendidikan ='SD/MI'   THEN nilai ELSE 0 END) AS total_nilai_SD_MI_2022_P,
    
        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'L' AND pendidikan ='SLTP/MTS'   THEN nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2022_L,
        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'P' AND pendidikan ='SLTP/MTS'   THEN nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2022_P,
    
        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'L' AND pendidikan ='SMA/SMK/MA'   THEN nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2022_L,
        SUM(CASE WHEN nilai AND tahun = 2022 AND jenisKelamin = 'P' AND pendidikan ='SMA/SMK/MA'   THEN nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2022_P
    
    FROM 
        tbl_siga17
    WHERE 
        kabupaten = 'Tebo' AND 
        idKategoriData = '$id_kategori' AND
        idJudulData = '$id_juduldata';
    
        ");
    }

    public function getData18($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
    
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2023 AND tbl_siga18.jenisKelamin = 'L' AND tbl_siga18.jenisData ='GURU SD/MI'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SD_MI_2023_L,
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2023 AND tbl_siga18.jenisKelamin = 'P' AND tbl_siga18.jenisData ='GURU SD/MI'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SD_MI_2023_P,
    
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2023 AND tbl_siga18.jenisKelamin = 'L' AND tbl_siga18.jenisData ='GURU SLTP/MTS'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2023_L,
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2023 AND tbl_siga18.jenisKelamin = 'P' AND tbl_siga18.jenisData ='GURU SLTP/MTS'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2023_P,
    
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2023 AND tbl_siga18.jenisKelamin = 'L' AND tbl_siga18.jenisData ='GURU SMA/SMK/MA'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2023_L,
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2023 AND tbl_siga18.jenisKelamin = 'P' AND tbl_siga18.jenisData ='GURU SMA/SMK/MA'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2023_P,
    
    
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2022 AND tbl_siga18.jenisKelamin = 'L' AND tbl_siga18.jenisData ='GURU SD/MI'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SD_MI_2022_L,
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2022 AND tbl_siga18.jenisKelamin = 'P' AND tbl_siga18.jenisData ='GURU SD/MI'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SD_MI_2022_P,
    
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2022 AND tbl_siga18.jenisKelamin = 'L' AND tbl_siga18.jenisData ='GURU SLTP/MTS'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2022_L,
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2022 AND tbl_siga18.jenisKelamin = 'P' AND tbl_siga18.jenisData ='GURU SLTP/MTS'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2022_P,
    
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2022 AND tbl_siga18.jenisKelamin = 'L' AND tbl_siga18.jenisData ='GURU SMA/SMK/MA'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2022_L,
        SUM(CASE WHEN tbl_siga18.nilai AND tbl_siga18.tahun = 2022 AND tbl_siga18.jenisKelamin = 'P' AND tbl_siga18.jenisData ='GURU SMA/SMK/MA'   THEN tbl_siga18.nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2022_P
    
    FROM 
    tbl_kecTebo 
    LEFT JOIN 
        tbl_siga18 
    ON 
        tbl_kecTebo.idKec = tbl_siga18.idKec 
    
    WHERE 
        tbl_siga18.idKategoriData = '$id_kategori' AND
        tbl_siga18.idJudulData = '$id_juduldata'
    GROUP BY 
        tbl_kecTebo.namaKec;
    
    
        ");
    }

    public function getData19($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
    
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2023 AND tbl_siga19.jenisKelamin = 'L' AND tbl_siga19.pendidikan ='SD/MI'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SD_MI_2023_L,
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2023 AND tbl_siga19.jenisKelamin = 'P' AND tbl_siga19.pendidikan ='SD/MI'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SD_MI_2023_P,
    
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2023 AND tbl_siga19.jenisKelamin = 'L' AND tbl_siga19.pendidikan ='SLTP/MTS'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2023_L,
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2023 AND tbl_siga19.jenisKelamin = 'P' AND tbl_siga19.pendidikan ='SLTP/MTS'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2023_P,
    
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2023 AND tbl_siga19.jenisKelamin = 'L' AND tbl_siga19.pendidikan ='SMA/SMK/MA'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2023_L,
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2023 AND tbl_siga19.jenisKelamin = 'P' AND tbl_siga19.pendidikan ='SMA/SMK/MA'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2023_P,
    
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2022 AND tbl_siga19.jenisKelamin = 'L' AND tbl_siga19.pendidikan ='SD/MI'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SD_MI_2022_L,
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2022 AND tbl_siga19.jenisKelamin = 'P' AND tbl_siga19.pendidikan ='SD/MI'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SD_MI_2022_P,
    
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2022 AND tbl_siga19.jenisKelamin = 'L' AND tbl_siga19.pendidikan ='SLTP/MTS'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2022_L,
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2022 AND tbl_siga19.jenisKelamin = 'P' AND tbl_siga19.pendidikan ='SLTP/MTS'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SLTP_MTS_2022_P,
    
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2022 AND tbl_siga19.jenisKelamin = 'L' AND tbl_siga19.pendidikan ='SMA/SMK/MA'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2022_L,
        SUM(CASE WHEN tbl_siga19.nilai AND tbl_siga19.tahun = 2022 AND tbl_siga19.jenisKelamin = 'P' AND tbl_siga19.pendidikan ='SMA/SMK/MA'   THEN tbl_siga19.nilai ELSE 0 END) AS total_nilai_SMA_SMK_MA_2022_P
    
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga19 
    ON 
        tbl_kecTebo.idKec = tbl_siga19.idKec 
    
    WHERE 
        tbl_siga19.idKategoriData = '$id_kategori' AND
        tbl_siga19.idJudulData = '$id_juduldata'
    GROUP BY 
        tbl_kecTebo.namaKec;
    
    
    
        ");
    }

    public function getData20($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
    tbl_kecTebo.namaKec,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2022 AND tbl_siga20.kategoriSekolah = 'Negeri' AND tbl_siga20.jenisSekolah ='SD/MI'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SD_MI_2022_N,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2022 AND tbl_siga20.kategoriSekolah = 'Swasta' AND tbl_siga20.jenisSekolah ='SD/MI'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SD_MI_2022_S,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2022 AND tbl_siga20.kategoriSekolah = 'Negeri' AND tbl_siga20.jenisSekolah ='SLTP/MTS'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SLTP_MTS_2022_N,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2022 AND tbl_siga20.kategoriSekolah = 'Swasta' AND tbl_siga20.jenisSekolah ='SLTP/MTS'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SLTP_MTS_2022_S,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2022 AND tbl_siga20.kategoriSekolah = 'Negeri' AND tbl_siga20.jenisSekolah ='SMA/SMK/MA'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SMA_SMK_MA_2022_N,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2022 AND tbl_siga20.kategoriSekolah = 'Swasta' AND tbl_siga20.jenisSekolah ='SMA/SMK/MA'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SMA_SMK_MA_2022_S,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2023 AND tbl_siga20.kategoriSekolah = 'Negeri' AND tbl_siga20.jenisSekolah ='SD/MI'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SD_MI_2023_N,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2023 AND tbl_siga20.kategoriSekolah = 'Swasta' AND tbl_siga20.jenisSekolah ='SD/MI'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SD_MI_2023_S,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2023 AND tbl_siga20.kategoriSekolah = 'Negeri' AND tbl_siga20.jenisSekolah ='SLTP/MTS'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SLTP_MTS_2023_N,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2023 AND tbl_siga20.kategoriSekolah = 'Swasta' AND tbl_siga20.jenisSekolah ='SLTP/MTS'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SLTP_MTS_2023_S,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2023 AND tbl_siga20.kategoriSekolah = 'Negeri' AND tbl_siga20.jenisSekolah ='SMA/SMK/MA'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SMA_SMK_MA_2023_N,
    SUM(
        CASE 
            WHEN tbl_siga20.nilai AND tbl_siga20.tahun = 2023 AND tbl_siga20.kategoriSekolah = 'Swasta' AND tbl_siga20.jenisSekolah ='SMA/SMK/MA'   
            THEN tbl_siga20.nilai 
            ELSE 0 
        END
    ) AS total_nilai_SMA_SMK_MA_2023_S
FROM 
    tbl_kecTebo 
LEFT JOIN 
    tbl_siga20 
ON 
    tbl_kecTebo.idKec = tbl_siga20.idKec 
WHERE 
    tbl_siga20.idKategoriData = '$id_kategori' AND
    tbl_siga20.idJudulData = '$id_juduldata'
GROUP BY 
    tbl_kecTebo.namaKec;
        ");
    }

    public function getData21($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
        SUM(CASE 
            WHEN tbl_siga21.nilai AND tbl_siga21.jenisKelamin = 'L' AND tbl_siga21.tahun = 2022
            THEN tbl_siga21.nilai 
            ELSE 0 
        END) AS total_nilai_2022_L,
        SUM(CASE 
            WHEN tbl_siga21.nilai AND tbl_siga21.jenisKelamin = 'P' AND tbl_siga21.tahun = 2022
            THEN tbl_siga21.nilai 
            ELSE 0 
        END) AS total_nilai_2022_P,
    
        SUM(CASE 
            WHEN tbl_siga21.nilai AND tbl_siga21.jenisKelamin = 'L' AND tbl_siga21.tahun = 2023
            THEN tbl_siga21.nilai 
        ELSE 0 
        END) AS total_nilai_2023_L,
        SUM(CASE 
            WHEN tbl_siga21.nilai AND tbl_siga21.jenisKelamin = 'P' AND tbl_siga21.tahun = 2023
            THEN tbl_siga21.nilai 
        ELSE 0 
        END) AS total_nilai_2023_P
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga21 
    ON 
        tbl_kecTebo.idKec = tbl_siga21.idKec 
    WHERE 
        tbl_siga21.idKategoriData = '$id_kategori' 
        AND tbl_siga21.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec;
    
        ");
    }

    public function getData22($id_kategori, $id_juduldata)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
        SUM(CASE 
            WHEN tbl_siga22.nilai AND tbl_siga22.jenisKelamin = 'L' AND tbl_siga22.tahun = 2022
            THEN tbl_siga22.nilai 
            ELSE 0 
        END) AS total_nilai_2022_L,
        SUM(CASE 
            WHEN tbl_siga22.nilai AND tbl_siga22.jenisKelamin = 'P' AND tbl_siga22.tahun = 2022
            THEN tbl_siga22.nilai 
            ELSE 0 
        END) AS total_nilai_2022_P,
    
        SUM(CASE 
            WHEN tbl_siga22.nilai AND tbl_siga22.jenisKelamin = 'L' AND tbl_siga22.tahun = 2023
            THEN tbl_siga22.nilai 
        ELSE 0 
        END) AS total_nilai_2023_L,
        SUM(CASE 
            WHEN tbl_siga22.nilai AND tbl_siga22.jenisKelamin = 'P' AND tbl_siga22.tahun = 2023
            THEN tbl_siga22.nilai 
        ELSE 0 
        END) AS total_nilai_2023_P
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga22 
    ON 
        tbl_kecTebo.idKec = tbl_siga22.idKec 
    WHERE 
        tbl_siga22.idKategoriData = '$id_kategori' 
        AND tbl_siga22.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec;
    
    
        ");
    }

    public function getData23($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
        SUM(CASE 
            WHEN tbl_siga23.nilai AND tbl_siga23.jenisKelamin = 'L' AND tbl_siga23.tahun = $tahunAwal
            THEN tbl_siga23.nilai 
            ELSE 0 
        END) AS total_nilai_awal_L,
        SUM(CASE 
            WHEN tbl_siga23.nilai AND tbl_siga23.jenisKelamin = 'P' AND tbl_siga23.tahun = $tahunAwal
            THEN tbl_siga23.nilai 
            ELSE 0 
        END) AS total_nilai_awal_P,
        SUM(CASE 
            WHEN tbl_siga23.nilai AND tbl_siga23.jenisKelamin = 'L' AND tbl_siga23.tahun = $tahunAkhir
            THEN tbl_siga23.nilai 
            ELSE 0 
        END) AS total_nilai_akhir_L,
        SUM(CASE 
            WHEN tbl_siga23.nilai AND tbl_siga23.jenisKelamin = 'P' AND tbl_siga23.tahun = $tahunAkhir
            THEN tbl_siga23.nilai 
            ELSE 0 
        END) AS total_nilai_akhir_P
       
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga23 
    ON 
        tbl_kecTebo.idKec = tbl_siga23.idKec 
    WHERE 
        tbl_siga23.idKategoriData = '$id_kategori' 
        AND tbl_siga23.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec;
    
    
        ");
    }

    public function getData24($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
        SUM(CASE 
            WHEN tbl_siga24.nilai AND tbl_siga24.jenisKelamin = 'L' AND tbl_siga24.tahun = $tahunAwal
            THEN tbl_siga24.nilai 
            ELSE 0 
        END) AS total_nilai_awal_L,
        SUM(CASE 
            WHEN tbl_siga24.nilai AND tbl_siga24.jenisKelamin = 'P' AND tbl_siga24.tahun = $tahunAwal
            THEN tbl_siga24.nilai 
            ELSE 0 
        END) AS total_nilai_awal_P,
        SUM(CASE 
            WHEN tbl_siga24.nilai AND tbl_siga24.jenisKelamin = 'L' AND tbl_siga24.tahun = $tahunAkhir
            THEN tbl_siga24.nilai 
            ELSE 0 
        END) AS total_nilai_akhir_L,
        SUM(CASE 
            WHEN tbl_siga24.nilai AND tbl_siga24.jenisKelamin = 'P' AND tbl_siga24.tahun = $tahunAkhir
            THEN tbl_siga24.nilai 
            ELSE 0 
        END) AS total_nilai_akhir_P
       
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga24 
    ON 
        tbl_kecTebo.idKec = tbl_siga24.idKec 
    WHERE 
        tbl_siga24.idKategoriData = '$id_kategori' 
        AND tbl_siga24.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec;
    
    
        ");
    }

    public function getData25($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
        SUM(CASE 
            WHEN tbl_siga25.nilai AND tbl_siga25.jenisKelamin = 'L' AND tbl_siga25.tahun = $tahunAwal
            THEN tbl_siga25.nilai 
            ELSE 0 
        END) AS total_nilai_awal_L,
        SUM(CASE 
            WHEN tbl_siga25.nilai AND tbl_siga25.jenisKelamin = 'P' AND tbl_siga25.tahun = $tahunAwal
            THEN tbl_siga25.nilai 
            ELSE 0 
        END) AS total_nilai_awal_P,
        SUM(CASE 
            WHEN tbl_siga25.nilai AND tbl_siga25.jenisKelamin = 'L' AND tbl_siga25.tahun = $tahunAkhir
            THEN tbl_siga25.nilai 
            ELSE 0 
        END) AS total_nilai_akhir_L,
        SUM(CASE 
            WHEN tbl_siga25.nilai AND tbl_siga25.jenisKelamin = 'P' AND tbl_siga25.tahun = $tahunAkhir
            THEN tbl_siga25.nilai 
            ELSE 0 
        END) AS total_nilai_akhir_P
       
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga25 
    ON 
        tbl_kecTebo.idKec = tbl_siga25.idKec 
    WHERE 
        tbl_siga25.idKategoriData = '$id_kategori' 
        AND tbl_siga25.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec;
    
    
        ");
    }

    public function getData26($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
    tbl_kecTebo.namaKec,
    SUM(CASE 
        WHEN tbl_siga26.nilai AND tbl_siga26.jenisKelamin = 'L' AND tbl_siga26.tahun = $tahunAwal
        THEN tbl_siga26.nilai 
        ELSE 0 
    END) AS total_nilai_awal_L,
    SUM(CASE 
        WHEN tbl_siga26.nilai AND tbl_siga26.jenisKelamin = 'P' AND tbl_siga26.tahun = $tahunAwal
        THEN tbl_siga26.nilai 
        ELSE 0 
    END) AS total_nilai_awal_P,
    SUM(CASE 
        WHEN tbl_siga26.nilai AND tbl_siga26.jenisKelamin = 'L' AND tbl_siga26.tahun = $tahunAkhir
        THEN tbl_siga26.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_L,
    SUM(CASE 
        WHEN tbl_siga26.nilai AND tbl_siga26.jenisKelamin = 'P' AND tbl_siga26.tahun = $tahunAkhir
        THEN tbl_siga26.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_P
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga26 
    ON 
        tbl_kecTebo.idKec = tbl_siga26.idKec 
    WHERE 
        tbl_siga26.idKategoriData = '$id_kategori' 
        AND tbl_siga26.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec;
        ");
    }

    public function getData27($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
       SELECT 
    tbl_kecTebo.namaKec,
    SUM(CASE 
        WHEN tbl_siga27.nilai AND tbl_siga27.jenisKelamin = 'L' AND tbl_siga27.tahun = $tahunAwal
        THEN tbl_siga27.nilai 
        ELSE 0 
    END) AS total_nilai_awal_L,
    SUM(CASE 
        WHEN tbl_siga27.nilai AND tbl_siga27.jenisKelamin = 'P' AND tbl_siga27.tahun = $tahunAwal
        THEN tbl_siga27.nilai 
        ELSE 0 
    END) AS total_nilai_awal_P,
    SUM(CASE 
        WHEN tbl_siga27.nilai AND tbl_siga27.jenisKelamin = 'L' AND tbl_siga27.tahun = $tahunAkhir
        THEN tbl_siga27.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_L,
    SUM(CASE 
        WHEN tbl_siga27.nilai AND tbl_siga27.jenisKelamin = 'P' AND tbl_siga27.tahun = $tahunAkhir
        THEN tbl_siga27.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_P
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga27 
    ON 
        tbl_kecTebo.idKec = tbl_siga27.idKec 
    WHERE 
        tbl_siga27.idKategoriData = '$id_kategori' 
        AND tbl_siga27.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec;

        ");
    }

    public function getData28($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
        SUM(CASE 
            WHEN tbl_siga28.nilai AND tbl_siga28.jenisKelamin = 'L' AND tbl_siga28.tahun = $tahunAwal
            THEN tbl_siga28.nilai 
            ELSE 0 
        END) AS total_nilai_awal_L,
        SUM(CASE 
            WHEN tbl_siga28.nilai AND tbl_siga28.jenisKelamin = 'P' AND tbl_siga28.tahun = $tahunAwal
            THEN tbl_siga28.nilai 
            ELSE 0 
        END) AS total_nilai_awal_P,
        SUM(CASE 
            WHEN tbl_siga28.nilai AND tbl_siga28.jenisKelamin = 'L' AND tbl_siga28.tahun = $tahunAkhir
            THEN tbl_siga28.nilai 
            ELSE 0 
        END) AS total_nilai_akhir_L,
        SUM(CASE 
            WHEN tbl_siga28.nilai AND tbl_siga28.jenisKelamin = 'P' AND tbl_siga28.tahun = $tahunAkhir
            THEN tbl_siga28.nilai 
            ELSE 0 
        END) AS total_nilai_akhir_P
        FROM 
            tbl_kecTebo 
        LEFT JOIN 
            tbl_siga28 
        ON 
            tbl_kecTebo.idKec = tbl_siga28.idKec 
        WHERE 
            tbl_siga28.idKategoriData = '$id_kategori' 
            AND tbl_siga28.idJudulData = '$id_juduldata' 
        GROUP BY 
            tbl_kecTebo.namaKec;


        ");
    }

    public function getData29($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
            SELECT 
            pGolonganR,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAwal 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_awal_L,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAwal 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_awal_P,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAkhir 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_akhir_L,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAkhir 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_akhir_P
                

            FROM 
                tbl_siga29 
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata'

                GROUP BY 
                pGolonganR
    
        ");
    }

    public function getData30($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
            SELECT 
            pGolonganR,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAwal 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_awal_L,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAwal 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_awal_P,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAkhir 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_akhir_L,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAkhir 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_akhir_P
                

            FROM 
                tbl_siga30 
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata'

                GROUP BY 
                pGolonganR
    
        ");
    }

    public function getData31($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
            SELECT 
            partaipolitik,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAwal 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_awal_L,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAwal 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_awal_P,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAkhir 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_akhir_L,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAkhir 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_akhir_P
            FROM 
                tbl_siga31 
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata'

                GROUP BY 
                partaipolitik
    
        ");
    }

    public function getData32($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
            SELECT 
            komisi,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAwal 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_awal_L,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAwal 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_awal_P,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAkhir 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_akhir_L,
                SUM(CASE 
                    WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAkhir 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_akhir_P
            FROM 
                tbl_siga32 
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata'

                GROUP BY 
                komisi
    
        ");
    }

    public function getData33($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
           SELECT 
            jenisData,
                SUM(CASE 
                    WHEN nilai AND tahun = $tahunAwal 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_awal,
                SUM(CASE 
                    WHEN nilai AND  tahun = $tahunAkhir 
                    THEN nilai 
                    ELSE 0 
                END) AS total_nilai_akhir
               
            FROM 
                tbl_siga33 
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata'

                GROUP BY 
                jenisData
    
        ");
    }

    public function getData34($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
            SELECT 
            tbl_kecTebo.namaKec,
            tbl_kecTebo.jumdesa,
            SUM(CASE 
                WHEN tbl_siga34.nilai AND tbl_siga34.jenisKelamin = 'L' AND tbl_siga34.tahun = $tahunAwal
                THEN tbl_siga34.nilai 
                ELSE 0 
            END) AS total_nilai_awal_L,
            SUM(CASE 
                WHEN tbl_siga34.nilai AND tbl_siga34.jenisKelamin = 'P' AND tbl_siga34.tahun = $tahunAwal
                THEN tbl_siga34.nilai 
                ELSE 0 
            END) AS total_nilai_awal_P,
            SUM(CASE 
                WHEN tbl_siga34.nilai AND tbl_siga34.jenisKelamin = 'L' AND tbl_siga34.tahun = $tahunAkhir
                THEN tbl_siga34.nilai 
                ELSE 0 
            END) AS total_nilai_akhir_L,
            SUM(CASE 
                WHEN tbl_siga34.nilai AND tbl_siga34.jenisKelamin = 'P' AND tbl_siga34.tahun = $tahunAkhir
                THEN tbl_siga34.nilai 
                ELSE 0 
            END) AS total_nilai_akhir_P
            FROM 
                tbl_kecTebo 
            LEFT JOIN 
                tbl_siga34 
            ON 
                tbl_kecTebo.idKec = tbl_siga34.idKec 
            WHERE 
                tbl_siga34.idKategoriData = '$id_kategori' 
                AND tbl_siga34.idJudulData = '$id_juduldata' 
            GROUP BY 
                tbl_kecTebo.namaKec;

    
        ");
    }

    public function getData35($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
            SELECT 
            wilayahUnit,
            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L' AND  jenisData='Struktural' AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_Struktural_L,

            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P' AND  jenisData='Struktural' AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_Struktural_P,


            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L' AND  jenisData='Fungsional' AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_Fungsional_L,

            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P' AND  jenisData='Fungsional' AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_Fungsional_P,




            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L' AND  jenisData='Struktural' AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_Struktural_L,

            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P' AND  jenisData='Struktural' AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_Struktural_P,


            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L' AND  jenisData='Fungsional' AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_Fungsional_L,
            
            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P' AND  jenisData='Fungsional' AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_Fungsional_P
           
            FROM 
                tbl_siga35 
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata' 
            GROUP BY 
                wilayahUnit;

    
        ");
    }

    public function getData36($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
            wilayahUnit,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAwal
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_awal_L,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAwal
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_awal_P,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAkhir
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_akhir_L,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAkhir
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_akhir_P
            FROM 
                tbl_siga36
          
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata' 
            GROUP BY 
                wilayahUnit;
    
        ");
    }

    public function getData37($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
            SELECT 
            wilayahUnitPengadilan,
            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L' AND  jenisData='Ketua' AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_Ketua_L,
            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P' AND  jenisData='Ketua' AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_Ketua_P,


            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L' AND  jenisData='Wakil Ketua' AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_Wakil_Ketua_L,
            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P' AND  jenisData='Wakil Ketua' AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_Wakil_Ketua_P,


            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L' AND  jenisData='Anggota' AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_Anggota_L,
            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P' AND  jenisData='Anggota' AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_Anggota_P,




            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L' AND  jenisData='Ketua' AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_Ketua_L,
            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P' AND  jenisData='Ketua' AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_Ketua_P,


            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L' AND  jenisData='Wakil Ketua' AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_Wakil_Ketua_L,
            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P' AND  jenisData='Wakil Ketua' AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_Wakil_Ketua_P,


            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L' AND  jenisData='Anggota' AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_Anggota_L,
            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P' AND  jenisData='Anggota' AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_Anggota_P
           
           
            FROM 
                tbl_siga37 
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata' 
            GROUP BY 
                wilayahUnitPengadilan;

    
        ");
    }

    public function getData38($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
           SELECT 
            wilayah,
            jenisData,
            SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L'  AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_L,

             SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P'  AND tahun = $tahunAwal
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_awal_P,


             SUM(CASE 
                WHEN nilai AND jenisKelamin = 'L'  AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_L,

             SUM(CASE 
                WHEN nilai AND jenisKelamin = 'P'  AND tahun = $tahunAkhir
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_akhir_P
        

            FROM 
                tbl_siga38
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata'
            GROUP BY  jenisData;


        ");
    }

    public function getData39($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
            wilayah,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAwal
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_awal_L,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAwal
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_awal_P,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAkhir
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_akhir_L,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAkhir
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_akhir_P
            FROM 
                tbl_siga39
          
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata' 
            GROUP BY 
                wilayah;
    
        ");
    }

    public function getData40($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
            jenisData,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAwal
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_awal_L,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAwal
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_awal_P,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'L' AND tahun = $tahunAkhir
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_akhir_L,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'P' AND tahun = $tahunAkhir
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_akhir_P
            FROM 
                tbl_siga40
          
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata' 
            GROUP BY 
                jenisData;
    
        ");
    }

    public function getData41($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
            SELECT 
                jenisData,
            SUM(CASE 
                WHEN nilai AND pendidikan = 'SD' 
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_SD,
            SUM(CASE 
                WHEN nilai AND pendidikan = 'SLTP' 
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_SLTP,
            SUM(CASE 
                WHEN nilai AND pendidikan = 'SLTA' 
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_SLTA,
            SUM(CASE 
                WHEN nilai AND pendidikan = 'PT' 
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_PT,
            SUM(CASE 
                WHEN nilai AND pendidikan = 'Lain-Lain' 
                THEN nilai 
                ELSE 0 
            END) AS total_nilai_Lain_Lain

            FROM 
                tbl_siga41
          
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata' 
            GROUP BY 
                jenisData;
    
        ");
    }

    public function getData42($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
            SELECT 
                jenisData,
            SUM(CASE 
                WHEN jenisKelamin = 'L' AND umur < 12 
                THEN nilai 
                ELSE 0 
            END) AS total_umur_12_L,
            SUM(CASE 
                WHEN jenisKelamin = 'P' AND umur < 12 
                THEN nilai 
                ELSE 0 
            END) AS total_umur_12_P,
           

            SUM(CASE 
                WHEN jenisKelamin = 'L' AND umur BETWEEN 13 AND 17 
                THEN nilai 
                ELSE 0 
            END) AS total_umur_13_17_L,
            SUM(CASE 
                WHEN jenisKelamin = 'P' AND umur BETWEEN 13 AND 17 
                THEN nilai 
                ELSE 0 
            END) AS total_umur_13_17_P,

             SUM(CASE 
                WHEN jenisKelamin = 'L' AND umur BETWEEN 18 AND 22 
                THEN nilai 
                ELSE 0 
            END) AS total_umur_18_22_L,
            SUM(CASE 
                WHEN jenisKelamin = 'P' AND umur BETWEEN 18 AND 22 
                THEN nilai 
                ELSE 0 
            END) AS total_umur_18_22_P,

            SUM(CASE 
                WHEN jenisKelamin = 'L' AND umur BETWEEN 23 AND 27 
                THEN nilai 
                ELSE 0 
            END) AS total_umur_23_27_L,
            SUM(CASE 
                WHEN jenisKelamin = 'P' AND umur BETWEEN 23 AND 27 
                THEN nilai 
                ELSE 0 
            END) AS total_umur_23_27_P
                    
            
            FROM 
                tbl_siga42
          
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata' 
            GROUP BY 
                jenisData;
    
        ");
    }

    public function getData43($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
            SELECT 
                jenisData,
            SUM(CASE WHEN jenisKasus = 'pembunuhan' THEN nilai  ELSE 0 END) AS total_pembunuhan,

            SUM(CASE WHEN jenisKasus = 'pencurian' THEN nilai ELSE 0 END) AS total_pencurian,

            SUM(CASE WHEN jenisKasus = 'pemerkosaan' THEN nilai  ELSE 0 END) AS total_pemerkosaan,

            SUM(CASE WHEN jenisKasus = 'asusila' THEN nilai  ELSE 0 END) AS total_asusila,

            SUM(CASE WHEN jenisKasus = 'napza' THEN nilai  ELSE 0 END) AS total_napza,

            SUM(CASE WHEN jenisKasus = 'kdrt' THEN nilai  ELSE 0 END) AS total_kdrt,

            SUM(CASE WHEN jenisKasus = 'korupsi' THEN nilai  ELSE 0 END) AS total_korupsi,

            SUM(CASE WHEN jenisKasus = 'Lainnya' THEN nilai  ELSE 0 END) AS total_Lainnya
           
                    
            
            FROM 
                tbl_siga43
          
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata' 
            GROUP BY 
                jenisData;
    
        ");
    }

    public function getData44($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
       SELECT 
    tbl_kecTebo.namaKec,
    SUM(CASE 
        WHEN tbl_siga44.nilai AND tbl_siga44.jenisKelamin = 'L' AND tbl_siga44.tahun = $tahunAwal
        THEN tbl_siga44.nilai 
        ELSE 0 
    END) AS total_nilai_awal_L,
    SUM(CASE 
        WHEN tbl_siga44.nilai AND tbl_siga44.jenisKelamin = 'P' AND tbl_siga44.tahun = $tahunAwal
        THEN tbl_siga44.nilai 
        ELSE 0 
    END) AS total_nilai_awal_P,
    SUM(CASE 
        WHEN tbl_siga44.nilai AND tbl_siga44.jenisKelamin = 'L' AND tbl_siga44.tahun = $tahunAkhir
        THEN tbl_siga44.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_L,
    SUM(CASE 
        WHEN tbl_siga44.nilai AND tbl_siga44.jenisKelamin = 'P' AND tbl_siga44.tahun = $tahunAkhir
        THEN tbl_siga44.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_P
    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga44 
    ON 
        tbl_kecTebo.idKec = tbl_siga44.idKec 
    WHERE 
        tbl_siga44.idKategoriData = '$id_kategori' 
        AND tbl_siga44.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec;
        ");
    }


    public function getData45($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
            jenisKekerasan,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'L' AND jenisOrang='Orang Tua' AND tahun = $tahunAwal
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_awal_Orang_Tua_L,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'P' AND jenisOrang='Orang Tua' AND tahun = $tahunAwal
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_awal_Orang_Tua_P,

         SUM(CASE 
            WHEN nilai AND jenisKelamin = 'L' AND jenisOrang='Anak' AND tahun = $tahunAwal
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_awal_Anak_L,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'P' AND jenisOrang='Anak' AND tahun = $tahunAwal
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_awal_Anak_P,



         SUM(CASE 
            WHEN nilai AND jenisKelamin = 'L' AND jenisOrang='Orang Tua' AND tahun = $tahunAkhir
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_akhir_Orang_Tua_L,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'P' AND jenisOrang='Orang Tua' AND tahun = $tahunAkhir
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_akhir_Orang_Tua_P,

         SUM(CASE 
            WHEN nilai AND jenisKelamin = 'L' AND jenisOrang='Anak' AND tahun = $tahunAkhir
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_akhir_Anak_L,
        SUM(CASE 
            WHEN nilai AND jenisKelamin = 'P' AND jenisOrang='Anak' AND tahun = $tahunAkhir
            THEN nilai 
            ELSE 0 
        END) AS total_nilai_akhir_Anak_P
       
            FROM 
                tbl_siga45
          
            WHERE 
                idKategoriData = '$id_kategori' 
                AND idJudulData = '$id_juduldata' 
            GROUP BY 
                jenisKekerasan;
    
        ");
    }


    public function getData46($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
       SELECT 
    tbl_kecTebo.namaKec,
    SUM(CASE 
        WHEN tbl_siga46.nilai AND tbl_siga46.jenisData = 'Rumah Tangga' AND tbl_siga46.tahun = $tahunAwal
        THEN tbl_siga46.nilai 
        ELSE 0 
    END) AS total_nilai_awal_Rumah_Tangga,
    SUM(CASE 
        WHEN tbl_siga46.nilai AND tbl_siga46.jenisData = 'Tempat Kerja' AND tbl_siga46.tahun = $tahunAwal
        THEN tbl_siga46.nilai 
        ELSE 0 
    END) AS total_nilai_awal_Tempat_Kerja,
    SUM(CASE 
        WHEN tbl_siga46.nilai AND tbl_siga46.jenisData = 'Sekolah' AND tbl_siga46.tahun = $tahunAwal
        THEN tbl_siga46.nilai 
        ELSE 0 
    END) AS total_nilai_awal_Sekolah,
     SUM(CASE 
        WHEN tbl_siga46.nilai AND tbl_siga46.jenisData = 'Tempat Umum' AND tbl_siga46.tahun = $tahunAwal
        THEN tbl_siga46.nilai 
        ELSE 0 
    END) AS total_nilai_awal_Tempat_Umum,
    SUM(CASE 
        WHEN tbl_siga46.nilai AND tbl_siga46.jenisData = 'Lainnya' AND tbl_siga46.tahun = $tahunAwal
        THEN tbl_siga46.nilai 
        ELSE 0 
    END) AS total_nilai_awal_Lainnya,


    SUM(CASE 
        WHEN tbl_siga46.nilai AND tbl_siga46.jenisData = 'Rumah Tangga' AND tbl_siga46.tahun = $tahunAkhir
        THEN tbl_siga46.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_Rumah_Tangga,
    SUM(CASE 
        WHEN tbl_siga46.nilai AND tbl_siga46.jenisData = 'Tempat Kerja' AND tbl_siga46.tahun = $tahunAkhir
        THEN tbl_siga46.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_Tempat_Kerja,
    SUM(CASE 
        WHEN tbl_siga46.nilai AND tbl_siga46.jenisData = 'Sekolah' AND tbl_siga46.tahun = $tahunAkhir
        THEN tbl_siga46.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_Sekolah,
     SUM(CASE 
        WHEN tbl_siga46.nilai AND tbl_siga46.jenisData = 'Tempat Umum' AND tbl_siga46.tahun = $tahunAkhir
        THEN tbl_siga46.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_Tempat_Umum,
    SUM(CASE 
        WHEN tbl_siga46.nilai AND tbl_siga46.jenisData = 'Lainnya' AND tbl_siga46.tahun = $tahunAkhir
        THEN tbl_siga46.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_Lainnya
   

    FROM 
        tbl_kecTebo 
    LEFT JOIN 
        tbl_siga46 
    ON 
        tbl_kecTebo.idKec = tbl_siga46.idKec 
    WHERE 
        tbl_siga46.idKategoriData = '$id_kategori' 
        AND tbl_siga46.idJudulData = '$id_juduldata' 
    GROUP BY 
        tbl_kecTebo.namaKec;

        ");
    }


    public function getData47($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
       SELECT 
    tbl_kecTebo.namaKec,
    SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'pengaduan' AND tbl_siga47.tahun = $tahunAwal
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_awal_pengaduan,
    SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'pelayanan' AND tbl_siga47.tahun = $tahunAwal
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_awal_pelayanan,
    SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'rehabilitasi' AND tbl_siga47.tahun = $tahunAwal
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_awal_rehabilitasi,
     SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'penegakan' AND tbl_siga47.tahun = $tahunAwal
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_awal_penegakan,
    SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'pemulangan' AND tbl_siga47.tahun = $tahunAwal
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_awal_pemulangan,
    SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'konseling' AND tbl_siga47.tahun = $tahunAwal
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_awal_konseling,



    SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'pengaduan' AND tbl_siga47.tahun = $tahunAkhir
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_pengaduan,
    SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'pelayanan' AND tbl_siga47.tahun = $tahunAkhir
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_pelayanan,
    SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'rehabilitasi' AND tbl_siga47.tahun = $tahunAkhir
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_rehabilitasi,
     SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'penegakan' AND tbl_siga47.tahun = $tahunAkhir
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_penegakan,
    SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'pemulangan' AND tbl_siga47.tahun = $tahunAkhir
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_pemulangan,
    SUM(CASE 
        WHEN tbl_siga47.nilai AND tbl_siga47.jenisData = 'konseling' AND tbl_siga47.tahun = $tahunAkhir
        THEN tbl_siga47.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_konseling

   

FROM 
    tbl_kecTebo 
LEFT JOIN 
    tbl_siga47 
ON 
    tbl_kecTebo.idKec = tbl_siga47.idKec 
WHERE 
    tbl_siga47.idKategoriData = '$id_kategori' 
    AND tbl_siga47.idJudulData = '$id_juduldata' 
GROUP BY 
    tbl_kecTebo.namaKec;


        ");
    }

    public function getData48($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
        SUM(CASE 
            WHEN tbl_siga48.nilai AND tbl_siga48.jenisKelamin = 'L' 
            THEN tbl_siga48.nilai 
            ELSE 0 
        END) AS total_nilai_all_L,
        SUM(CASE 
            WHEN tbl_siga48.nilai AND tbl_siga48.jenisKelamin = 'P' 
            THEN tbl_siga48.nilai 
            ELSE 0 
        END) AS total_nilai_all_P
        
        FROM 
            tbl_kecTebo 
        LEFT JOIN 
            tbl_siga48 
        ON 
            tbl_kecTebo.idKec = tbl_siga48.idKec 
        WHERE 
            tbl_siga48.idKategoriData = '$id_kategori' 
            AND tbl_siga48.idJudulData = '$id_juduldata' 
        GROUP BY 
            tbl_kecTebo.namaKec;


        ");
    }

    public function getData49($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
        tbl_kecTebo.namaKec,
        SUM(CASE 
            WHEN tbl_siga48.nilai AND tbl_siga48.jenisKelamin = 'L' 
            THEN tbl_siga48.nilai 
            ELSE 0 
        END) AS total_nilai_all_L,
        SUM(CASE 
            WHEN tbl_siga48.nilai AND tbl_siga48.jenisKelamin = 'P' 
            THEN tbl_siga48.nilai 
            ELSE 0 
        END) AS total_nilai_all_P
        
        FROM 
            tbl_kecTebo 
        LEFT JOIN 
            tbl_siga48 
        ON 
            tbl_kecTebo.idKec = tbl_siga48.idKec 
        WHERE 
            tbl_siga48.idKategoriData = '$id_kategori' 
            AND tbl_siga48.idJudulData = '$id_juduldata' 
        GROUP BY 
            tbl_kecTebo.namaKec;


        ");
    }

    public function getData50($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
     SELECT 
    tbl_kecTebo.namaKec,
    SUM(CASE 
        WHEN tbl_siga50.nilai AND tbl_siga50.jenisKelamin = 'L' AND tbl_siga50.tahun = $tahunAwal
        THEN tbl_siga50.nilai 
        ELSE 0 
    END) AS total_nilai_awal_L,
    SUM(CASE 
        WHEN tbl_siga50.nilai AND tbl_siga50.jenisKelamin = 'P' AND tbl_siga50.tahun = $tahunAwal
        THEN tbl_siga50.nilai 
        ELSE 0 
    END) AS total_nilai_awal_P,
    SUM(CASE 
        WHEN tbl_siga50.nilai AND tbl_siga50.jenisKelamin = 'L' AND tbl_siga50.tahun = $tahunAkhir
        THEN tbl_siga50.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_L,
    SUM(CASE 
        WHEN tbl_siga50.nilai AND tbl_siga50.jenisKelamin = 'P' AND tbl_siga50.tahun = $tahunAkhir
        THEN tbl_siga50.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_P
FROM 
    tbl_kecTebo 
LEFT JOIN 
    tbl_siga50 
ON 
    tbl_kecTebo.idKec = tbl_siga50.idKec 
WHERE 
    tbl_siga50.idKategoriData = '$id_kategori' 
    AND tbl_siga50.idJudulData = '$id_juduldata' 
GROUP BY 
    tbl_kecTebo.namaKec;

        ");
    }

    public function getData51($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
    SELECT 
    tbl_kecTebo.namaKec,
    SUM(CASE 
        WHEN tbl_siga51.nilai AND tbl_siga51.jenisKelamin = 'L' AND tbl_siga51.tahun = $tahunAwal
        THEN tbl_siga51.nilai 
        ELSE 0 
    END) AS total_nilai_awal_L,
    SUM(CASE 
        WHEN tbl_siga51.nilai AND tbl_siga51.jenisKelamin = 'P' AND tbl_siga51.tahun = $tahunAwal
        THEN tbl_siga51.nilai 
        ELSE 0 
    END) AS total_nilai_awal_P,
    SUM(CASE 
        WHEN tbl_siga51.nilai AND tbl_siga51.jenisKelamin = 'L' AND tbl_siga51.tahun = $tahunAkhir
        THEN tbl_siga51.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_L,
    SUM(CASE 
        WHEN tbl_siga51.nilai AND tbl_siga51.jenisKelamin = 'P' AND tbl_siga51.tahun = $tahunAkhir
        THEN tbl_siga51.nilai 
        ELSE 0 
    END) AS total_nilai_akhir_P
FROM 
    tbl_kecTebo 
LEFT JOIN 
    tbl_siga51 
ON 
    tbl_kecTebo.idKec = tbl_siga51.idKec 
WHERE 
    tbl_siga51.idKategoriData = '$id_kategori' 
    AND tbl_siga51.idJudulData = '$id_juduldata' 
GROUP BY 
    tbl_kecTebo.namaKec;


        ");
    }

    public function getData52($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
            tbl_kecTebo.namaKec,
            SUM(CASE 
                WHEN tbl_siga52.nilai AND tbl_siga52.jenisKelamin = 'L' AND tbl_siga52.tahun = $tahunAwal
                THEN tbl_siga52.nilai 
                ELSE 0 
            END) AS total_nilai_awal_L,
            SUM(CASE 
                WHEN tbl_siga52.nilai AND tbl_siga52.jenisKelamin = 'P' AND tbl_siga52.tahun = $tahunAwal
                THEN tbl_siga52.nilai 
                ELSE 0 
            END) AS total_nilai_awal_P,
            SUM(CASE 
                WHEN tbl_siga52.nilai AND tbl_siga52.jenisKelamin = 'L' AND tbl_siga52.tahun = $tahunAkhir
                THEN tbl_siga52.nilai 
                ELSE 0 
            END) AS total_nilai_akhir_L,
            SUM(CASE 
                WHEN tbl_siga52.nilai AND tbl_siga52.jenisKelamin = 'P' AND tbl_siga52.tahun = $tahunAkhir
                THEN tbl_siga52.nilai 
                ELSE 0 
            END) AS total_nilai_akhir_P
            FROM 
                tbl_kecTebo 
            LEFT JOIN 
                tbl_siga52 
            ON 
                tbl_kecTebo.idKec = tbl_siga52.idKec 
            WHERE 
                tbl_siga52.idKategoriData = '$id_kategori' 
                AND tbl_siga52.idJudulData = '$id_juduldata' 
            GROUP BY 
                tbl_kecTebo.namaKec;
        ");
    }

    public function getData53($id_kategori, $id_juduldata, $tahunAwal, $tahunAkhir)
    {
        return $this->db->query("
        SELECT 
            tbl_kecTebo.namaKec,
            SUM(CASE 
                WHEN tbl_siga53.nilai AND tbl_siga53.jenisKelamin = 'L' AND tbl_siga53.tahun = $tahunAwal
                THEN tbl_siga53.nilai 
                ELSE 0 
            END) AS total_nilai_awal_L,
            SUM(CASE 
                WHEN tbl_siga53.nilai AND tbl_siga53.jenisKelamin = 'P' AND tbl_siga53.tahun = $tahunAwal
                THEN tbl_siga53.nilai 
                ELSE 0 
            END) AS total_nilai_awal_P,
            SUM(CASE 
                WHEN tbl_siga53.nilai AND tbl_siga53.jenisKelamin = 'L' AND tbl_siga53.tahun = $tahunAkhir
                THEN tbl_siga53.nilai 
                ELSE 0 
            END) AS total_nilai_akhir_L,
            SUM(CASE 
                WHEN tbl_siga53.nilai AND tbl_siga53.jenisKelamin = 'P' AND tbl_siga53.tahun = $tahunAkhir
                THEN tbl_siga53.nilai 
                ELSE 0 
            END) AS total_nilai_akhir_P
        FROM 
            tbl_kecTebo 
        LEFT JOIN 
            tbl_siga53 
        ON 
            tbl_kecTebo.idKec = tbl_siga53.idKec 
        WHERE 
            tbl_siga53.idKategoriData = '$id_kategori' 
            AND tbl_siga53.idJudulData = '$id_juduldata' 
        GROUP BY 
            tbl_kecTebo.namaKec;

        ");
    }

    // get data 
}

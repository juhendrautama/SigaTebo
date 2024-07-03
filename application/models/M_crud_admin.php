<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_admin extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function GetUserAll()
	{
		$hsl = $this->db->query("SELECT `id_admin`, 
		(SELECT namaUnit FROM tbl_unitKerja  WHERE tbl_unitKerja.idUnitKerja = tbl_admin.idUnitKerja ) as namaUnit, 
		`nama_admin`, `user`, `pass`,`pass_samaran`, `alamat`, `no_tlpn`, `level`,`KodeLogin`, `tgl` FROM `tbl_admin`");
		return $hsl;
	}

	function cek1()
	{
		$unit = $this->db->escape_str($this->input->post('idUnitKerja'));
		$user = $this->db->escape_str($this->input->post('user'));
		$pass = md5($_POST['pass']);
		$hsl = $this->db->query("SELECT `id_admin`,`idUnitKerja`,`nama_admin`, `user`, `pass`, `alamat`, `no_tlpn`, `level`,`KodeLogin`, `tgl` FROM `tbl_admin` WHERE KodeLogin='1' and  idUnitKerja='$unit' and  user='$user' and pass='$pass'");
		return $hsl;
	}


	function SimpanData()
	{
		$idUnitKerja = $this->db->escape_str($this->input->post('idUnitKerja'));
		$nama_admin = $this->db->escape_str($this->input->post('nama_admin'));
		$user = $this->db->escape_str($this->input->post('user'));
		$pass = md5($_POST['pass']);
		$pass_samaran = $this->db->escape_str($this->input->post('pass'));
		$no_tlpn = $this->db->escape_str($this->input->post('no_tlpn'));
		$alamat = $this->db->escape_str($this->input->post('alamat'));
		$tgl = Date("Y-m-d");
		$sql = $this->db->query("INSERT INTO `tbl_admin`(`id_admin`, `idUnitKerja`, `nama_admin`, `user`, `pass`,`pass_samaran`, `alamat`, `no_tlpn`, `level`, `KodeLogin`,`tgl`) VALUES (NULL,'$idUnitKerja','$nama_admin','$user','$pass','$pass_samaran','$alamat','$no_tlpn','2','1','$tgl') 
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
		$pass_samaran = $this->db->escape_str($this->input->post('pass'));
		$pass = md5($_POST['pass']);
		$pass_samaran = $this->db->escape_str($this->input->post('pass'));
		$no_tlpn = $this->db->escape_str($this->input->post('no_tlpn'));
		$alamat = $this->db->escape_str($this->input->post('alamat'));
		$level = $this->db->escape_str($this->input->post('level'));
		$KodeLogin = $this->db->escape_str($this->input->post('KodeLogin'));
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
		`KodeLogin`='$KodeLogin',
        `tgl`='$tgl'
        where
        id_admin = '$id'  
        ");
		return $sql;
	}

	function HapusData($id)
	{
		$sql = $this->db->query(" DELETE FROM `tbl_admin` WHERE id_admin='$id'");
		return $sql;
	}
}

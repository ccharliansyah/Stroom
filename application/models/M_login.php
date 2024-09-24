<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function authLogin($username, $password)
	{
		$select = "SELECT * FROM USERS WHERE USERNAME=" . $this->db->escape($username) . " AND PASSWORD =" . $this->db->escape($password) . " AND AKTIV ='01' ";
		$get = $this->db->query($select);
		return $get->row();
	}

	public function userDetail($id)
	{
		$select = "SELECT * FROM DATA_SISWA WHERE USERNAME = '" . $id . "' ";
		$get = $this->db->query($select);
		return $get->row_array();
	}

	public function passWord($password)
	{
		$select = "SELECT * FROM ADMIN WHERE PARAMETER ='password' AND PASSWORD =" . $this->db->escape($password) . "  ";
		$get = $this->db->query($select);
		return $get->row();
	}

	public function updateConfirm($user)
	{
		$this->db->trans_start();
		$UPDATE = "UPDATE DATA_SISWA SET CONFIRM = 1 ";
		$this->db->query($UPDATE);

		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}
}

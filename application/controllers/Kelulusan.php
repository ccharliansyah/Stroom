<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelulusan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_')) {
			redirect();
		}
		$this->load->model('M_login', 'login');
	}

	public function index()
	{
		$result = $this->login->userDetail($this->session->userdata('ID'));

		$data['nav'] = 3;
		$data['nisn'] = $result['username'];
		$data['nama'] = $result['nama'];
		$data['kelas'] = $result['kelas'];
		$data['status_lulus'] = $result['status_lulus'];
		$data['confirm'] = $result['confirm'];
		$this->load->view('tampilan/kelulusan', $data);
	}

	public function prosesKel()
	{
		$result = $this->input->post('result');
		if ($this->login->passWord($result)) {
			if ($this->login->updateConfirm($this->session->userdata('ID'))) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'status'  => true,
					)));
			} else {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'status'  => false,
						'text'    => 'Gagal Update!',
					)));
			}
		} else {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'status'  => false,
					'text'    => 'Password Salah!',
				)));
		}
	}
}

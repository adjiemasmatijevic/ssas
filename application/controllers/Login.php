<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('string'));
	}

	public function index()
	{
		if ($this->session->userdata('log_in')) {
			if ($this->session->userdata('log_in')['role'] == 1) {
				redirect('kabupaten', 'refresh');
			} elseif ($this->session->userdata('log_in')['role'] == 2) {
				redirect('dapil', 'refresh');
			} elseif ($this->session->userdata('log_in')['role'] == 3) {
				redirect('kecamatan', 'refresh');
			} elseif ($this->session->userdata('log_in')['role'] == 4) {
				redirect('desa', 'refresh');
			} elseif ($this->session->userdata('log_in')['role'] == 5) {
				redirect('tps', 'refresh');
			}
		} else {
			$data = array(
				'username' => set_value('username'),
				'password' => set_value('password'),
			);
			$this->load->view('login', $data);
		}
	}

	public function proses()
	{
		$username 	= addslashes(trim($this->input->post('username', true)));
		$password 	= addslashes(trim($this->input->post('password', true)));
		$this->load->model('M_login');
		$row = $this->M_login->validasi_adm($username, $password);

		if ($row != null) {
			$this->_daftarkan_session($row);
		} else {
			$this->notifikasi->failLogin();
			redirect('Login', 'refresh');
		}
	}

	public function _daftarkan_session($row)
	{
		array_merge($row, array('is_logged_in' => true));
		$this->session->set_userdata('log_in', $row);
		if ($this->session->userdata('log_in')['role'] == 1) {
			redirect('kabupaten', 'refresh');
		} elseif ($this->session->userdata('log_in')['role'] == 2) {
			redirect('dapil', 'refresh');
		} elseif ($this->session->userdata('log_in')['role'] == 3) {
			redirect('kecamatan', 'refresh');
		} elseif ($this->session->userdata('log_in')['role'] == 4) {
			redirect('desa', 'refresh');
		} elseif ($this->session->userdata('log_in')['role'] == 5) {
			redirect('tps', 'refresh');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}
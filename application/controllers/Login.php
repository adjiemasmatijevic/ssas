<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('string'));
		$this->load->model('M_login');
	}

	public function index()
	{
		if ($this->session->userdata('log_in')) {
			if ($this->session->userdata('log_in')['role_id'] == 1) {
				redirect('OPS', 'refresh');
			} elseif ($this->session->userdata('log_in')['role_id'] == 2) {
				redirect('OPC', 'refresh');
			} elseif ($this->session->userdata('log_in')['role_id'] == 3) {
				redirect('KACAB', 'refresh');
			} elseif ($this->session->userdata('log_in')['role_id'] == 4) {
				redirect('Admin_finance', 'refresh');
			} elseif ($this->session->userdata('log_in')['role_id'] == 5) {
				redirect('Admin_HO_Finance', 'refresh');
			} elseif ($this->session->userdata('log_in')['role_id'] == 6) {
				redirect('Admin_HO_Manager', 'refresh');
			} elseif ($this->session->userdata('log_in')['role_id'] == 7) {
				redirect('Super_Admin_HO', 'refresh');
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
		if ($this->session->userdata('log_in')['role_id'] == 1) {
			redirect('OPS', 'refresh');
		} elseif ($this->session->userdata('log_in')['role_id'] == 2) {
			redirect('OPC', 'refresh');
		} elseif ($this->session->userdata('log_in')['role_id'] == 3) {
			redirect('KACAB', 'refresh');
		} elseif ($this->session->userdata('log_in')['role_id'] == 4) {
			redirect('Admin_finance', 'refresh');
		} elseif ($this->session->userdata('log_in')['role_id'] == 5) {
			redirect('Admin_HO_Finance', 'refresh');
		} elseif ($this->session->userdata('log_in')['role_id'] == 6) {
			redirect('Admin_HO_Manager', 'refresh');
		} elseif ($this->session->userdata('log_in')['role_id'] == 7) {
			redirect('Super_Admin_HO', 'refresh');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
	public function insert_users()
	{
		// Data user yang akan diinsert
		$users = [
			[
				'nama_user' => 'Andi Saputra',
				'username'  => 'andi',
				'password'  => password_hash('123456', PASSWORD_BCRYPT),
				'phone'     => '081234567890',
				'jabatan'   => 'Admin Operasi',
				'cabang'    => 'Cabang Tarakan',
				'role_id'   => 1,
				'status'    => 1
			],
			[
				'nama_user' => 'Siti Rahma',
				'username'  => 'siti',
				'password'  => password_hash('123456', PASSWORD_BCRYPT),
				'phone'     => '082145678901',
				'jabatan'   => 'Admin Operasi',
				'cabang'    => 'Cabang Weda',
				'role_id'   => 1,
				'status'    => 1
			],
			[
				'nama_user' => 'Budi Pratama',
				'username'  => 'budi',
				'password'  => password_hash('123456', PASSWORD_BCRYPT),
				'phone'     => '085678901234',
				'jabatan'   => 'User OPC',
				'cabang'    => 'Cabang Tarakan',
				'role_id'   => 2,
				'status'    => 1
			],
			[
				'nama_user' => 'Rina Amelia',
				'username'  => 'rina',
				'password'  => password_hash('123456', PASSWORD_BCRYPT),
				'phone'     => '087654321098',
				'jabatan'   => 'User OPC',
				'cabang'    => 'Cabang Weda',
				'role_id'   => 2,
				'status'    => 1
			]
		];

		// Insert data ke tabel users
		$this->db->insert_batch('users', $users);

		echo "✅ 4 data user berhasil ditambahkan ke tabel users.";
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		$this->load->view('templates/loginheader');
		$this->load->view('autentifikasi/login');
		$this->load->view('templates/loginfooter');
	}
	public function regist()
	{
		$this->load->view('templates/loginheader');
		$this->load->view('autentifikasi/regist');
		$this->load->view('templates/loginfooter');
	}
	public function input_regist()
	{
		$data_masuk = [
			'nama_user' => $this->input->post('nama_user'),
			'email' => $this->input->post('email_user'),
			'password' => md5($this->input->post('password_user')),
			'foto_user' => 'default.jpg',
			'role_user' => 2,
			'is_active' => 1,
			'date_created' => date('d:m:y')
		];
		$this->db->insert('user', $data_masuk);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil di Input ! </div>');
		redirect('Auth');
	}
	public function proseslogin()
	{
		$email = htmlspecialchars($this->input->post('email', true));
		$password = md5($this->input->post('password_user', true));
		$user = $this->db->get_where('user', ['email' => $email])->row_array(); //jika usernya ada 
		if ($user) { //jika user sudah aktif 
			if ($user['is_active'] == 1) {
				//cek password 
				if ($password == $user['password']) {
					$data = ['email' => $user['email'], 'role_user' => $user['role_user']];
					$this->session->set_userdata($data);
					if ($user['role_user'] == 1) {
						redirect('admin');
					} else redirect('user'); {
						if ($user['foto_user'] == 'default.jpg') {
							$this->session->set_flashdata('message', '<div class="alert alert-info alert-message" role="alert">Silahkan Ubah Profile Anda untuk Ubah Photo Profil</div>');
						}
						redirect('user');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
					redirect('Auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
				redirect('Auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
			redirect('Auth');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert"> Kamu telah Logout. Silahkan Login kembali.:)</div>');
		redirect('Auth');
	}
}

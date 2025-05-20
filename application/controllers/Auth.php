<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }
    // TAMPILKAN HALAMAN LOGIN
    public function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard'); // ganti ke controller dashboard kamu
        }

        $this->load->view('auth/login'); // tampilkan halaman login
    }
    // PROSES LOGIN
    public function login_action() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user = $this->User_model->get_user($username, $password);

        if ($user) {
            // simpan data ke session
            $this->session->set_userdata([
                'user_id' => $user->id,
                'username' => $user->username,
                'logged_in' => true
            ]);
            redirect('dashboard'); // redirect ke halaman utama setelah login
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('auth/login');
        }
    }
    // TAMPILKAN HALAMAN REGISTER
    public function register() {
        $this->load->view('auth/register');
    }
    // PROSES REGISTER
    public function register_action() {
        $username = $this->input->post('username');
        $email    = $this->input->post('email');
        $password = md5($this->input->post('password'));

        // cek username
        $existingUser = $this->db->get_where('users', ['username' => $username])->row();

        if ($existingUser) {
            $this->session->set_flashdata('error', 'Username sudah digunakan');
            redirect('auth/register');
            return;
        }
        // simpan data user
        $this->db->insert('users', [
            'username' => $username,
            'email'    => $email,
            'password' => $password
        ]);

        $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
        redirect('auth/login');
    }
    // LOGOUT
    public function logout() {
        $this->session->unset_userdata(array('user_id', 'username', 'logged_in'));
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

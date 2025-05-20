<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_users');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
        $data['users'] = $this->m_users->tampil_data()->result();
        $this->load->view('users/v_tampil', $data);
    }

    public function tambah() {
        $this->load->view('users/v_input');
    }

    public function tambah_aksi() {
        // Ambil data dari input form
        $username = $this->input->post('username');
        $email    = $this->input->post('email');
        $password = md5($this->input->post('password')); // Enkripsi password

        // Cek apakah username sudah ada
        $existingUser = $this->db->get_where('users', ['username' => $username])->row();
        if ($existingUser) {
            $this->session->set_flashdata('error', 'Username sudah digunakan');
            redirect('users/tambah');
            return;
        }

        // Simpan ke database
        $this->m_users->input_data([
            'username' => $username,
            'email'    => $email,
            'password' => $password
        ]);

        $this->session->set_flashdata('success', 'User berhasil ditambahkan');
        redirect('users');
    }

    public function edit($id) {
        $where = array('id' => $id);
        $data['users'] = $this->m_users->edit_data($where)->result();
        $this->load->view('users/v_edit', $data);
    }

    public function update() {
        $id       = $this->input->post('id');
        $username = $this->input->post('username');
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        // Jika password diisi, enkripsi; kalau kosong, tetap gunakan password lama
        if (!empty($password)) {
            $password = md5($password);
            $data = ['username' => $username, 'email' => $email, 'password' => $password];
        } else {
            $data = ['username' => $username, 'email' => $email];
        }

        $where = ['id' => $id];
        $this->m_users->update_data($where, $data);

        $this->session->set_flashdata('success', 'Data user berhasil diperbarui');
        redirect('users');
    }

    public function hapus($id) {
        $where = array('id' => $id);
        $this->m_users->hapus_data($where);
        $this->session->set_flashdata('success', 'User berhasil dihapus');
        redirect('users');
    }
}

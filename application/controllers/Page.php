<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->load->model('m_mahasiswa');
        $this->load->model('m_dosen');
        $this->load->model('m_kelas');
        $this->load->model('m_matkul');
    }

    public function dashboard() {
        $data['title'] = 'Dashboard';
        $data['jml_mahasiswa'] = $this->m_mahasiswa->tampil_data()->num_rows();
        $data['jml_dosen']     = $this->m_dosen->tampil_data()->num_rows();
        $data['jml_matkul']    = $this->m_matkul->tampil_data()->num_rows();
        $data['jml_kelas']     = $this->m_kelas->tampil_data()->num_rows();
        $data['content']       = ''; // kosong karena dashboard langsung di-render di template
    
        $this->load->view('template', $data);
    }
    

    public function index() {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data()->result();
        $data['content'] = 'mahasiswa/v_tampil'; // 
        $this->load->view('template', $data);    // bungkus dengan template
    }
    
    public function dosen() {
        $data['title'] = 'Data Dosen';
        $data['dosen'] = $this->m_dosen->tampil_data()->result();
        $data['content'] = 'dosen/v_tampil';
        $this->load->view('template', $data);
    }
    
    public function matkul() {
        $data['title'] = 'Data Mata Kuliah';
        $data['matkul'] = $this->m_matkul->tampil_data()->result();
        $data['content'] = 'matkul/v_tampil';
        $this->load->view('template', $data);
    }
    
    public function kelas() {
        $data['title'] = 'Data Kelas';
        $data['kelas'] = $this->m_kelas->tampil_data()->result();
        $data['content'] = 'kelas/v_tampil';
        $this->load->view('template', $data);
    }
}

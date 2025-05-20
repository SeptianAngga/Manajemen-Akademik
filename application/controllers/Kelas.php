<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kelas');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Data Kelas';
        $data['kelas'] = $this->m_kelas->tampil_data()->result();
        $data['content'] = 'kelas/v_tampil';
        $this->load->view('template', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Kelas';
        $data['content'] = 'kelas/v_input';
        $this->load->view('template', $data);
    }

    public function tambah_aksi()
    {
        $data = array(
            'kode_kelas' => $this->input->post('kode_kelas'),
            'nama_kelas' => $this->input->post('nama_kelas')
        );
        $this->m_kelas->input_data($data, 'kelas');
        redirect('kelas');
    }

    public function hapus($id)
    {
        $this->m_kelas->hapus_data(['id' => $id], 'kelas');
        redirect('kelas');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Kelas';
        $data['kelas'] = $this->m_kelas->edit_data(['id' => $id], 'kelas')->row(); // ← ini penting
        $data['content'] = 'kelas/v_edit';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $data = array(
            'kode_kelas' => $this->input->post('kode_kelas'),
            'nama_kelas' => $this->input->post('nama_kelas')
        );
        $where = ['id' => $this->input->post('id')];
        $this->m_kelas->update_data($where, $data, 'kelas');
        redirect('kelas');
    }
}

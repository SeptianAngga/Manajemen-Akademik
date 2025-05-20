<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
        $this->load->helper('url');
    }

    function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data()->result();
        $data['content'] = 'mahasiswa/v_tampil'; // akan dimuat di template
        $this->load->view('template', $data);
    }

    function tambah()
    {
        $data['title'] = 'Tambah Mahasiswa';
        $data['content'] = 'mahasiswa/v_input'; // gunakan template
        $this->load->view('template', $data);
    }

    function tambah_aksi()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'npm' => $this->input->post('npm'),
            'alamat' => $this->input->post('alamat'),
            'gmail' => $this->input->post('gmail'),
            'prodi' => $this->input->post('prodi'),
        );
        $this->m_mahasiswa->input_data($data, 'mahasiswa');
        redirect('mahasiswa');
    }

    function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_mahasiswa->hapus_data($where, 'mahasiswa');
        redirect('mahasiswa');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $result = $this->m_mahasiswa->edit_data($where, 'mahasiswa')->result();
    
        if (!empty($result)) {
            $data['mahasiswa'] = $result[0]; // ambil satu data saja
        } else {
            show_404();
        }
    
        $data['content'] = 'mahasiswa/v_edit';
        $this->load->view('template', $data);
    }

    function update()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'npm' => $this->input->post('npm'),
            'alamat' => $this->input->post('alamat'),
            'gmail' => $this->input->post('gmail'),
            'prodi' => $this->input->post('prodi'),
        );

        $where = array('id' => $this->input->post('id'));
        $this->m_mahasiswa->update_data($where, $data, 'mahasiswa');
        redirect('mahasiswa');
    }
}
?>

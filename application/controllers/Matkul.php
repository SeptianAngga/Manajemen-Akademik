<?php
class Matkul extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_matkul');
        $this->load->helper('url');
    }

    function index()
    {
        $data['title'] = 'Data Mata Kuliah';
        $data['matkul'] = $this->m_matkul->tampil_data()->result();
        $data['content'] = 'matkul/v_tampil';
        $this->load->view('template', $data);
    }

    function tambah()
    {
        $data['title'] = 'Tambah Mata Kuliah';
        $data['content'] = 'matkul/v_input';
        $this->load->view('template', $data);
    }

    function tambah_aksi()
    {
        $data = array(
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul')
        );
        $this->m_matkul->input_data($data, 'matkul');
        redirect('matkul');
    }

    function hapus($id)
    {
        $this->m_matkul->hapus_data(['id' => $id], 'matkul');
        redirect('matkul');
    }

    function edit($id)
    {
        $data['matkul'] = $this->m_matkul->edit_data(['id' => $id], 'matkul')->row(); // Ubah ke row()
        $this->load->view('template', [
            'title' => 'Edit Mata Kuliah',
            'content' => 'matkul/v_edit',
            'matkul' => $data['matkul']
        ]);
    }
    

    function update()
    {
        $data = array(
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul')
        );
        $where = ['id' => $this->input->post('id')];
        $this->m_matkul->update_data($where, $data, 'matkul');
        redirect('matkul');
    }
}
?>

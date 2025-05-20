<?php
class Dosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_dosen');
        $this->load->helper('url');
    }

    function index()
    {
        $data['title']  = 'Data Dosen';
        $data['dosen']  = $this->m_dosen->tampil_data()->result();
        $data['content'] = 'dosen/v_tampil'; // penting agar dibaca di template.php
        $this->load->view('template', $data); // bungkus ke template
    }

    function tambah()
    {
        $data['title'] = 'Tambah Dosen';
        $data['content'] = 'dosen/v_input';
        $this->load->view('template', $data);
    }

    function tambah_aksi()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nidn' => $this->input->post('nidn')
        );
        $this->m_dosen->input_data($data, 'dosen');
        redirect('dosen/index');
    }

    function hapus($id)
    {
        $this->m_dosen->hapus_data(['id' => $id], 'dosen');
        redirect('dosen/index');
    }

    function edit($id)
    {
        $data['title'] = 'Edit Dosen';
        $data['dosen'] = $this->m_dosen->edit_data(['id' => $id], 'dosen')->result();
        $data['content'] = 'dosen/v_edit';
        $this->load->view('template', $data);
    }

    function update()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nidn' => $this->input->post('nidn')
        );
        $where = ['id' => $this->input->post('id')];
        $this->m_dosen->update_data($where, $data, 'dosen');
        redirect('dosen/index');
    }
}
?>

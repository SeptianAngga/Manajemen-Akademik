<?php
class M_users extends CI_Model {

    function tampil_data() {
        return $this->db->get('users');
    }

    function input_data($data) {
        $this->db->insert('users', $data); // Langsung sebutkan nama tabel
    }

    function hapus_data($where) {
        $this->db->where($where);
        $this->db->delete('users');
    }

    function edit_data($where) {
        return $this->db->get_where('users', $where);
    }

    function update_data($where, $data) {
        $this->db->where($where);
        $this->db->update('users', $data);
    }
}
?>

<?php

class M_organisasi extends CI_Model
{
    private $table = 'organisasi';

    function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by('id_organisasi','DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getById($id) 
    {
        return $this->db->get_where($this->table, ['id_organisasi' => $id])->row();
    }

    function insertData($data)
    {
        return $this->db->insert($this->table, $data);
    }

    function updateData($data, $id_organisasi)
    {
        $this->db->where('id_organisasi', $id_organisasi);
        $this->db->update($this->table, $data);
        return true;
    }
}
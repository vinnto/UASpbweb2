<?php

class M_project extends CI_Model
{
    private $table = 'project';

    function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by('id_project','DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getById($id) 
    {
        return $this->db->get_where($this->table, ['id_project' => $id])->row();
    }

    function insertData($data)
    {
        return $this->db->insert($this->table, $data);
    }

    function updateData($data, $id_project)
    {
        $this->db->where('id_project', $id_project);
        $this->db->update($this->table, $data);
        return true;
    }
}
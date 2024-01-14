<?php 

class M_about extends CI_Model {

    function updateData($table, $data, $id)  
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
        return true;
    }
}
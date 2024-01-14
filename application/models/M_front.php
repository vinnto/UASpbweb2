<?php 

class M_front extends CI_Model {

    function current_user()  
    {
        $query = $this->db->get_where('about',['id' => 1]);
        return $query->row();
    }
}
<?php 

class M_user extends CI_Model {

    function get_data() 
    {
        // get data akan mereturn setter dan getter yaitu mengambil data 
        return $this->db->get('user');
        // script diatas akan mengambil tabel user di dalam database.
    }
}
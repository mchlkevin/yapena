<?php

class Artikel_model extends CI_Model
{
    // public function getData()
    // {
    //     return $this->db->get('yapena_artikel')->result_array();
    // }
    public function getData()
    {
        $this->db->select('*');
        $this->db->from('yapena_artikel');
        $this->db->join('user', 'user.id = yapena_artikel.id_user');
        return $this->db->get()->result_array();
    }
}

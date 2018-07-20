<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gridtabel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getAllUser()
    {
        $query = $this->db->get('tbuser');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function save()
    {
        $data= $this->input->post();
        $this->db->insert('tbuser', $data);
    }

    public function delete($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('tbuser');
    }
}

?>

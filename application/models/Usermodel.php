<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usermodel extends CI_Model

{
    public function __construct()
      {
          parent::__construct();
      }

public function login($username,$password)
        {
            $this->db->select('*');
            $this->db->from('tbuser');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $query = $this->db->get();
            if($query->num_rows()==1){
                return $query->result();
            }else{
                return false;
            }

        }


        public function insertUser()
          {
            $object = array(
            'username' => $this->input->post('username'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),

          );
            $this->db->insert('tbuser',$object);
            }

          }

?>

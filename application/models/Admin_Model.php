<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Model extends CI_Model
{
    public function __construct()
      {
          parent::__construct();
          // $this->load->library('session');
      }

      public function Get()
        {
         $query = $this->db->get('tbuser');
         return $query->result_all();
        }

      public function login($username,$password)
        {
            $this->db->select('*');
            $this->db->from('tbuser');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $query = $this->db->get();
            if($query->num_rows()==1)
              {
                  return $query->result();
              }
            else
              {
                  return false;
              }

        }

      public function getGunung()
          {
            //ini nama tabel artinya select * from tabel pegawai pada db
              $query= $this->db->get('gunung');
              return $query->result();
          }

        public function getUserAll()
          {
            //ini nama tabel artinya select * from tabel pegawai pada db
            $query= $this->db->get('tbuser');
            return $query->result();
          }

         public function getKomentar()
          {
            //ini nama tabel artinya select * from tabel pegawai pada db
            $query= $this->db->get('Komentar');
            return $query->result();
          }

          public function insertUser()
            {
                $object = array(
                'username' => $this->input->post('username'),
                'jeniskelamin' => $this->input->post('jeniskelamin'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'level' => $this->input->post('level'),
              );
                $this->db->insert('tbuser',$object);
            }

        public function insertGunung()
        {
          $object = array(
          'nama_gunung' => $this->input->post('nama_gunung'),
          'lokasi' => $this->input->post('lokasi'),
          'tinggi' => $this->input->post('tinggi'),
          'status' => $this->input->post('status'),
          'gambar' => $this->upload->data('file_name'),
        );
          $this->db->insert('gunung',$object);
        }
public function updateuser($id)
      {
        # code...
        $data = array
        ('username' => $this->input->post('username'),
        'JenisKelamin' => $this->input->post('jeniskelamin'),
        'email' => $this->input->post('email'),
        'jpassword' => $this->input->post('password'),
        'level' => $this->input->post('level'),
          );
            $this->db->where('id', $id);
            $this->db->update('tbuser', $data);
      }

      public function getgunungAll()
        {
          //ini nama tabel artinya select * from tabel pegawai pada db
          $query= $this->db->get('gunung');
          return $query->result();
        }

      public function updategunung($id)
            {
              # code...
              $data = array
              ('nama_gunung' => $this->input->post('nama_gunung'),
              'lokasi' => $this->input->post('lokasi'),
              'tinggi' => $this->input->post('tinggi'),
              'status' => $this->input->post('status'),
              'gambar' => $this->upload->data('userfile'),
                );
                  $this->db->where('id', $id);
                  $this->db->update('gunung', $data);
            }

        public function GetUser($data)
        {
          $query = $this->db->get_where('tbuser', $data);
          return $query;
        }

}
?>

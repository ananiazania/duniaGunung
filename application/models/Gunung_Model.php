<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gunung_Model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function insertGunung()
  {
    $object = array('nama_gunung' =>
    $this->post('nama_gunung'),
    'lokasi' => $this->post('lokasi'),
    'tinggi' => $this->post('tinggi'),
    'status' => $this->post('status'),
    'gambar' => $this->post('gambar'),
  );
    $this->db->insert('Gunung', $object);
  }

  public function getGunung()
    {
      //ini nama tabel artinya select * from tabel pegawai pada db
        $query= $this->db->get('gunung');
        return $query->result();
    }

  public function updateById($id)
  {
    $data = array('nama_gunung' => $this->input->post('nama_gunung'),
    'lokasi' => $this->input->post('lokasi'),
    'tinggi' => $this->input->post('tinggi'),
    'gambar' => $this->input->post('gambar'),);
    $this->db->where('id', $id);
    $this->db->update('Gunung', $data);
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
        public function getGunungID($id)
          {
              $this->db->where('id_gunung',$id);
              $query= $this->db->get('gunung');
              return $query->result();
          }


}
?>

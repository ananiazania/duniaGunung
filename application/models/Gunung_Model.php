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
    $object = array('nama' => $this->post('nama'),
  'tinggi' => $this->post('tinggi'),
  'kota' => $this->post('kota'),
  'provinsi' => $this->post('provinsi'),);
  $this->db->insert('Gunung', $object);
  }

  public function getGunung()
    {
      //ini nama tabel artinya select * from tabel pegawai pada db
        $query= $this->db->get('wisata');
        return $query->result();
    }

  public function updateById($id)
  {
    $data = array('nama' => $this->input->post('nama'),
    'tinggi' => $this->input->post('tinggi'),
    'kota' => $this->input->post('kota'),
    'provinsi' => $this->input->post('provinsi'),);
    $this->db->where('id', $id);
    $this->db->update('Gunung', $data);
  }
}
?>

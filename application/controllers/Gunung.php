<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gunung extends CI_Controller
{
  public function __construct()
{
  parent::__construct();
  $this->load->helper('html');
      $this->load->library('form_validation');
      $this->load->helper('url','form');
      $this->load->model('Gunung_Model');
 }
  public function index()
  {
    $this->load->view('Gunung/admin/Home');
      //$this->load->view('Home');
  }

  public function tampil()
 {
   $data['daftar'] = $this->Gunung_Model->getGunung();
   $this->load->view('Gunung/DaftarGunung', $data);
 }

  public function create()
  {
    $this->from_validation->set_rules('nama', 'Nama', 'trim|required');
    $this->from_validation->set_rules('tinggi', 'Tinggi', 'trim|required');
    $this->from_validation->set_rules('kota', 'Kota', 'trim|required');
    $this->from_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
    if($this->from_validation->run()==FALSE)
    {
      $this->load->view('Daftar_Gunung_View');
    }
    else
    {
      $this->load->view('Daftar_Gunung_Sukses');
    }
  }

  // public function update()
  // {
  //   $this->load->helper('url','from');
  //   $this->load->library('from_validation');
  //   $this->from_validation->set_rules('nama', 'Nama', 'trim|required');
  //   $this->from_validation->set_rules('tinggi', 'Tinggi', 'trim|required');
  //   $this->from_validation->set_rules('kota', 'Kota', 'trim|required');
  //   $this->from_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
  //   if($this->from_validation->run()==FALSE)
  //   {
  //     $this->load->view('Edit_Gunung_View');
  //   }
  //   else
  //   {
  //     $this->load->view('Edit_Gunung_Sukses');
  //   }
  // }

  // public function delete($id)
  // {
  //   $this->db->where('id', $id);
	// 	return $this->db->delete('wisata');
  // }

  public function detail($id)
  {

  }
} ?>

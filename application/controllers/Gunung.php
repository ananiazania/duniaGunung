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
    $this->Data_gunung();
      //$this->load->view('Home');
  }

  public function Data_gunung()
  {
    $data['tampil'] = $this->Gunung_Model->getGunung();
    $this->load->view('Gunung/admin/Home_Apik', $data);

      //$this->load->view('Home');
  }

  public function tampil()
 {
   $data['tampil'] = $this->Gunung_Model->getGunung();
   $this->load->view('Gunung/admin/Home', $data);
 }
//  public function tampil2()
// {
//   $data['daftar'] = $this->Gunung_Model->getGunung();
//   $this->load->view('Gunung/admin/Home', $data);
// }




  

  public function detail($id)
  {

  }
} ?>

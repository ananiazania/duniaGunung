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
<<<<<<< HEAD
    $this->Data_gunung();
      //$this->load->view('Home');
  }

  public function Data_gunung()
  {
    $data['tampil'] = $this->Gunung_Model->getGunung();
    $this->load->view('Gunung/admin/Home', $data);

=======
    $this->load->view('gunung/user/Home');
>>>>>>> 53e5538e45ffe420063339397fe526e49ba80cde
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




   public function delete($id)
 {
     $this->Gunung_Model->delete($id);
     $this->load->view('Gunung/admin/Delete_makan_sukses');

 }

  public function detail($id)
  {

  }
} ?>

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
    $this->load->view('gunung/user/Home');
      //$this->load->view('Home');
  }

  public function tampil()
 {
   $data['daftar'] = $this->Gunung_Model->getGunung();
   $this->load->view('Gunung/admin/Home', $data);
 }
//  public function tampil2()
// {
//   $data['daftar'] = $this->Gunung_Model->getGunung();
//   $this->load->view('Gunung/admin/Home', $data);
// }

  public function create()
  {
    $this->from_validation->set_rules('nama_gunung', 'Nama', 'trim|required');
    $this->from_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
    $this->from_validation->set_rules('tinggi', 'Tinggi', 'trim|required');
    $this->from_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
    if($this->from_validation->run()==FALSE)
    {
      $this->load->view('Gunung/admin/Daftar_Gunung_View');
    }
    else
    {
      $this->load->view('Gunung/admin/Daftar_Gunung_Sukses');
    }
  }

  public function Update($id)
   {
      //mengganti validasi
      $this->form_validation->set_rules('nama_gunung','namaa','trim|required');
      $this->form_validation->set_rules('lokasi','total_harga','trim|required');
      $this->form_validation->set_rules('tinggi','jumlah','trim|required');
      $this->form_validation->set_rules('pengirim','pengirim','trim|required');


     $data['gunung']=$this->Gunung_Model->getGunungUpdate($id);


     if($this->form_validation->run()==FALSE)
     {
       $this->load->view('Gunung/admin/Update_Gunung',$data);
     }
     else
     {
       $config['upload_path'] = './assets/uploads/';
       $config['allowed_types'] = 'gif|jpg|png';
       $config['max_size']  = 8000000;
       $config['max_width']  = 1024;
       $config['max_height']  = 768;

       $this->load->library('upload',$config);

       if ( ! $this->upload->do_upload('userfile'))
       {
         $error = array('error' => $this->upload->display_errors());
                 $this->load->view('Gunung/admin/Daftar_Gunung_View', $error);
       }
       else
       {
         $this->Gunung_Model->UpdateByid($id);
         $this->load->view('Gunung/admin/Update_Gunung_Sukse');
       }
     }
     $data['barang']=$this->Gunung_Model->getmakan($id);
   }
   public function delete($id)
 {
     $this->Gunung_Model->delete($id);
     $this->load->view('Gunung/admin/Delete_makan_sukses');

 }

  public function detail($id)
  {

  }
} ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('Gunung/admin/LogIn_Admin');
  }

  public function Home_admin()
  {
      $this->load->view('Gunung/admin/Home');
  }

  public function DaftarUser_admin()
  {
      $this->load->view('Gunung/admin/Daftar_User');
  }

  public function DataKomentar_admin()
  {
      $this->load->view('Gunung/admin/Data_Komentar');
  }

  public function Profile_admin()
  {
      $this->load->view('Gunung/admin/Profile_admin');
  }

  public function Logout_admin()
  {
      $this->load->view('Gunung/admin/LogIn_Admin');
  }
  public function Bantuan()
  {
      $this->load->view('Gunung/admin/Bantuan');
  }

} ?>

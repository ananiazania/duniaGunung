<?php

defined(!'BASEPATH') OR exit('No direct script access allowed');

class Usertabel extends CI_Controller {


      public function __construct()
      {
        parent::__construct();
      }

     // public function index()
      // {
        //  $this->load->view('Gunung/user/LogIn_user');
        // $this->DaftarGunung();
      //}

      public function Daftaruseradmin()
      {
        //$this->load->view('Gunung/admin/Home_Apik');
        $this->load->view->('Gunung/admin/Daftar_User');
      }

    public function getUser()
      {
        $this->load->view('Daftar_User');
      }

    public function getAllUser()
      {
        $this->load->model('Gridtabel');
        $result = $this->Gridtabel->getAllUser();
        header("Content-Type: application/json");
        echo json_encode($result);
      }

      public function addUser()
        {
          $this->load->model('Gridtabel');
          $this->Gridtabel->save();
        }

      public function deleteUser()
        {
          $this->load->model('Gridtabel');
          $id_user = $this->input->post('id_post');
          $this->Gridtabel->delete($id_user);
        }

}

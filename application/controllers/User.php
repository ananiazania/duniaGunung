<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
      //  $this->load->view('Gunung/user/LogIn_user');
      $this->load->view('Gunung/user/Home');
    }


    public function Home_User()
    {
      $this->load->view('Gunung/user/Home');
    }


    public function DaftarGunung()
    {
      $this->load->model('Gunung_Model');
      $data['tampil'] = $this->Gunung_Model->getGunung();
      $this->load->view('Gunung/user/DaftarGunung',$data);

    }


    public function Tentang()
    {
        $this->load->view('Gunung/user/Tentang');
    }

    public function DataKomentar_user()
    {
      $this->load->view('Gunung/user/Data_Komentar');
    }

  public function Profile_user()
  {
      $this->load->view('Gunung/user/Profile');
  }

  public function Logout_user()
  {
      $this->load->view('Gunung/user/Login_User');
  }

  public function Daftar()
  {
      $this->load->view('Gunung/user/Daftar_user');
  }

  public function Bantuan()
  {
      $this->load->view('Gunung/user/Bantuan');
  }

  public function Masuk()
  {
      $this->load->view('Gunung/user/Login_User');
  }

  public function Login()
  {
      $this->load->library('form_validation');

       $this->form_validation->set_rules('username','username','trim|required');
       //disini ada cek db dia akan manggil function cek db di bawah
      $this->form_validation->set_rules('password','password','trim|required|callback_cekDb');

      if ($this->form_validation->run() == FALSE)
      {
           //jika tidak sama maka tetap di tampilan login
          $this->load->view('Gunung/User/Login_User');
      }
      else
       {
           //jika benar maka masuk dashboard atau tampilan setelah login
          redirect(base_url('Gunung/User/Home'),'refresh');
       }
     }

       public function Daftargunungtertinggi()
      {
        $this->load->model('Gunung_Model');
        $data['tampil'] = $this->Gunung_Model->getGunung();
        $this->load->view('Gunung/user/DaftarGunung',$data);
      }

            public function createUser()
            {
            $this->load->helper('url','form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username','Username','trim|required');
            $this->form_validation->set_rules('jeniskelamin','JenisKelamin','trim|required');
            $this->form_validation->set_rules('alamat','Alamat','trim|required');
            $this->form_validation->set_rules('email','Email','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');

            $this->load->model('Usermodel');

                  if($this->form_validation->run()==FALSE)
                  {
                      $this->load->view('Gunung/user/Daftar_user');
                  }
                  else
                  {
                      $this->Usermodel->insertUser();
                      $this->load->view('Gunung/user/daftarusersukses');
                  }


    }
}
?>

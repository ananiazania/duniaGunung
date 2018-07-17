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
      $this->DaftarGunung();
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

  // public function Logout_user()
  // {
  //     $this->load->view('Gunung/user/Login_User');
  // }

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

  public function Logout_user()
  {
      $this->load->view('Gunung/admin/LogIn_Admin');
  }

  public function Login()
  {
      $this->load->library('form_validation');

       $this->form_validation->set_rules('username','Username','trim|required');
       //disini ada cek db dia akan manggil function cek db di bawah
      $this->form_validation->set_rules('password','Password','trim|required|callback_cekDb');

      if ($this->form_validation->run() == FALSE)
      {
           //jika tidak sama maka tetap di tampilan login
          $this->load->view('Gunung/user/Login_User');
      }
      else
       {
           //jika benar maka masuk dashboard atau tampilan setelah login
          redirect(base_url('Gunung/user/Home'),'refresh');
       }
     }


 public function cekLogin()
 {
   $this->load->library('form_validation');
   $this->load->model('Usermodel');
   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
   if ($this->form_validation->run() ==  FALSE) {
     $this->load->view('Gunung/user/Login_User');
   }else{
     redirect(base_url('Gunung/user/Home'),'refresh');
   }
 }


           public function Daftargunungtertinggi()
          {
            $this->load->model('Gunung_Model');
            $data['tampil'] = $this->Gunung_Model->getGunung();
            $this->load->view('Gunung/user/DaftarGunung',$data);
          }

          public function cekDb($password)
              {
                $this->load->model('Usermodel');

                $username = $this->input->post('username');
                $result = $this->Usermodel->login($username,$password);

                print_r($result);

                if($result){
                    $sess_array = array();
                    foreach ($result as $row => $res) {
                         echo $res->id_user;
                        $sess_array = array(
                            'id_user'=>$res->id_user,
                             'username'=> $res->username,
                             'password'=> $res->password,

                        );
                        $this->session->set_userdata('logged_in',$sess_array);
                    }
                    return true;
                }else{
                    $this->form_validation->set_message('cekDb',"Login Gagal Username dan Password Tidak Valid");
                    return false;
                }
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

            public function logout()
              {
                  $this->session->unset_userdata('logged_in');
                  $this->session->sess_destroy();
                  redirect(base_url('Users'),'refresh');
              }
}
?>

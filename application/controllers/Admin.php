<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Gunung_Model');
    $this->load->model('Admin_Model');
  }

  public function index()
  {
      $this->load->view('Gunung/admin/Home_Apik');
   //$this->Home_admin();
  }

  public function Home_Apik()
  {
      $this->load->view('Gunung/admin/home_apik');
   //$this->Home_admin();
  }

  public function TambahUser_admin()
  {
      $this->load->view('Gunung/admin/Tambah_User');
  }

  public function Home_admin()
  {
    $this->load->model('Admin_Model');
    $data['tampil'] = $this->Admin_Model->getGunung();
    $this->load->view('Gunung/admin/Home', $data);

  }

  public function DaftarUser_admin()
  {
    $this->load->model('Admin_Model');
    $data['tampil'] = $this->Admin_Model->getUserAll();
    $this->load->view('Gunung/admin/Daftar_User',$data);
  }

  public function DataKomentar_admin()
  {
    $this->load->model('Admin_Model');
    $data['tampil'] = $this->Admin_Model->getKomentar();
      $this->load->view('Gunung/admin/Data_Komentar', $data);
  }

  public function Profile_admin()
  {
      $this->load->view('Gunung/admin/Profile_admin');
  }

  public function Tambah_Gun_admin()
  {
      $this->load->view('Gunung/admin/Tambah_Gunung_View');
  }

  public function Logout_admin()
  {
      $this->load->view('Gunung/admin/LogIn_Admin');
  }

  public function LogIn_admin()
  {
      $this->load->view('Gunung/admin/Home');
  }
  public function Bantuan()
  {
      $this->load->view('Gunung/admin/Bantuan');
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
    $this->form_validation->set_rules('level','Level','trim|required');
    $this->load->model('Admin_Model');

          if($this->form_validation->run()==FALSE)
          {
              $this->load->view('Gunung/admin/Tambah_User');
          }
          else
          {
              $this->Admin_Model->insertUser();
              $this->load->view('Gunung/admin/Daftar_User_Sukses');
          }
  }


  public function Login()
    {
        $this->load->library('form_validation');

         $this->form_validation->set_rules('username','username','trim|required');
         //disini ada cek db dia akan manggil function cek db di bawah
        $this->form_validation->set_rules('password','password','trim|required|callback_cekDb');

        if ($this->form_validation->run() == FALSE) {
             //jika tidak sama maka tetap di tampilan login
            $this->load->view('Gunung/Admin/LogIn_Admin');
        } else {
             //jika benar maka masuk dashboard atau tampilan setelah login
            redirect(base_url('Admin/Profile_admin'),'refresh');
        }
    }


    public function cekDb($password)
    {
        $this->load->model('Admin_Model');

        $username = $this->input->post('username');
        $result = $this->Admin_Model->login($username,$password);

        print_r($result);

        if($result){
            $sess_array = array();
            foreach ($result as $row => $res) {
                 echo $res->username;
                $sess_array = array(
                    'id_user'=>$res->id_user,
                    'username'=> $res->username,
                    'password'=> $res->password,
                    'level' => $res->level
                );
                $this->session->set_userdata('logged_in',$sess_array);
            }
            return true;
        }else{
            $this->form_validation->set_message('cekDb',"Login Gagal Username dan Password Tidak Valid");
            return false;
        }
     }

     public function Update($id)
 {
   $this->form_validation->set_rules('username','Username','trim|required');
   $this->form_validation->set_rules('jeniskelamin','JenisKelamin','trim|required');
   $this->form_validation->set_rules('alamat','Alamat','trim|required');
   $this->form_validation->set_rules('email','Email','trim|required');
   $this->form_validation->set_rules('password','Password','trim|required');
   $this->form_validation->set_rules('level','Level','trim|required');
   $this->load->model('Admin_Model');

     if ( ! $this->upload->do_upload())
     {
       $error = array('error' => $this->upload->display_errors());
               $this->load->view('Gunung/Admin/Tambah_User', $error);
     }
     else
     {
       $this->Admin_Model->UpdateByid($id);
       $this->load->view('Makan/');
     }
   }
   $data['barang']=$this->Admin_Model->getmakan($id);
 }


} ?>

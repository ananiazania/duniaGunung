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
      //$this->load->view('Gunung/admin/Home_Apik');
   $this->LogIn_Admin();
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

  public function Tambah_Gunung()
  {
      $this->load->view('Gunung/admin/Daftar_Gunung_View');
  }

  public function Logout_admin()
  {
      $this->load->view('Gunung/admin/LogIn_Admin');
  }

  public function LogIn_admin()
  {
    $this->load->view('Gunung/admin/LogIn_Admin');

  }
  public function cekDb()
  {
      $data = array('username' => $this->input->post('username', TRUE),
                    'password' => $this->input->post('password', TRUE));
      $this->load->model('Admin_Model');
      $hasil = $this->Admin_Model->GetUser($data);
      if ($hasil->num_rows() == 1) {
        foreach ($hasil->result() as $sess) {
          $sess_data['logged_in'] = 'Sudah Login';
          $sess_data['id_user'] = $sess->id_user;
          $sess_data['username'] = $sess->username;
          $sess_data['password'] = $sess->password;
          $sess_data['level'] = $sess->level;
          // $this->session->set_userdata('logged_in',$sess_array);

          $this->session->set_userdata($sess_data);
        }
        if ($this->session->userdata('level') == 'admin') {
          redirect('Gunung');
        }
        elseif ($this->session->userdata('level') == 'user')
        {
          redirect('User'); // code...
        }
      }
      else {
        echo "<script>alert('Gagal Login: Cek Ussername, Password');history.go(-1);</script>";
        redirect('User');
      }
   }


  public function Bantuan()
  {
      $this->load->view('Gunung/admin/Bantuan');
  }

  public function UpdateUser()
  {
      $this->load->view('Gunung/admin/Update_User');
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

  public function createGunung()
  {
      $this->load->helper('url','form');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('nama_gunung','Nama Gunung','trim|required');
      $this->form_validation->set_rules('lokasi','Lokasi','trim|required');
      $this->form_validation->set_rules('tinggi','Tinggi','trim|required');
      $this->form_validation->set_rules('status','Status','trim|required');
      $this->load->model('Admin_Model');

      if($this->form_validation->run()==FALSE)
        {
          $this->load->view('Gunung/admin/Daftar_Gunung_View');
        }
      else
      {
            //masuk folder gambar,type file
            $config['upload_path'] = './assets/Gambar/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = 8000000;
            $config['max_width']  = 1024;
            $config['max_height']  = 768;

    	       $this->load->library('upload',$config);
             if ( ! $this->upload->do_upload('userfile'))
              {
                // echo $this->upload->display_errors();
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Gunung/admin/Daftar_Gunung_View',$error);
                print_r($error);
              }
            else
              {
                $this->Admin_Model->insertGunung();
                $this->load->view('Gunung/admin/Daftar_Gunung_Sukses');
              }
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
             $this->Admin_Model->Updateuser($id);
             $this->load->view('Makan/');
           }
           $data['tbuser']=$this->Admin_Model->getUserAll($id);
     }

     public function UpdateGunungadmin($id)
     {
       $this->form_validation->set_rules('nama_gunung','NamaGunung','trim|required');
       $this->form_validation->set_rules('lokasi','Lokasi','trim|required');
       $this->form_validation->set_rules('tinggi','Tinggi','trim|required');
       $this->form_validation->set_rules('status','Status','trim|required');
       $this->load->model('Admin_Model');

         if ( ! $this->upload->do_upload(userfile))
          {
              $error = array('error' => $this->upload->display_errors());
              $this->load->view('Gunung/Admin/Update_Gunung', $error);
          }
         else
           {
             $this->Admin_Model->updategunung($id);
             $this->load->view('Gunung/admin/Home');
           }
           $data['gunung']=$this->Admin_Model->getgunungAll($id);
     }


} ?>

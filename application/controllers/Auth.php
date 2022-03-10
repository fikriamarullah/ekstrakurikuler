<?php 
    class Auth extends CI_controller{
        function index()
        {
            $this->load->view('partisi/head');
            $this->load->view('partisi/navigasi');
            $this->load->view('login');
            $this->load->view('partisi/js');
        }

        function proses_login(){
            $this->load->model('M_login');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $pass     = MD5($password);

            $cek_user = $this->M_login->cek_login($username,$pass)->result();

            if(count($cek_user) > 0){
                $this->session->set_userdata('username',$username);
                redirect('Admin');

            }else{
                redirect('Auth');
            }
        }
       
    }
?>
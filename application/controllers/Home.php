<?php 
    class Home extends CI_controller{
        function index()
        {
            $this->load->view('partisi/head');
            $this->load->view('partisi/navigasi');
            $this->load->view('partisi/header');
            $this->load->view('v_home');
            $this->load->view('partisi/about');
            $this->load->view('partisi/contact');
            $this->load->view('partisi/footer');
            $this->load->view('partisi/modal');
            $this->load->view('partisi/js');
        }
       
    }
?>
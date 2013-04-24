<?php

    class Home extends CI_Controller{
        
        function __construct() {
            parent::__construct();
        }
        
        function index(){
            $data['titulo'] = "Welcome to my world";
            $data['bd'] = $this->db->version();

            
            $this->load->view('home_view',$data) ;
            
        }
        
    }


?>

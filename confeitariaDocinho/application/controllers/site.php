<?php

    class Site extends CI_Controller{
        
        function __construct() {
            parent::__construct();
        }
        
        function index(){
            $data['titulo'] = "Welcome to my world";
            $data['bd'] = $this->db->version();

            $this->load->view('/template/topo.php');
            $this->load->view('/index.php',$data) ;
            $this->load->view('/template/rodape.php');
            
        }
        
    }


?>

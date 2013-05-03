<?php

    class Produtos extends CI_Controller {
        
        function __construct() {
            parent::__construct();
        }
        
        
        public function index(){
            $this->load->view("/template/topo.php");
            $this->load->view("/produtos.php");
            $this->load->view("/template/rodape.php");
            
        }
        
        
        
    }


?>

<?php

    class Site extends CI_Controller{
        
        
        
        function __construct() {
            parent::__construct();
        }
        
        function index(){
            $data['titulo'] = "Bem vindo a Confeitaria Docinho";
            $data['bd'] = $this->db->version();

            $this->load->view('/template/topo.php');
            $this->load->view('/index.php',$data) ;
            $this->load->view('/template/rodape.php');
            
        }
        
        function listaProdutos() {
            $data['titulo'] = "Bem vindo a Confeitaria Docinho";
            
            $this->load->view('/template/topo.php');
            $this->load->view('/produtos.php',$data);
            $this->load->view('/template/rodape.php');
        }
        
    }


?>

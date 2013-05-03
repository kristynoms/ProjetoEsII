<?php

class Compania extends CI_Controller {
    

    public function __construct() {
        parent::__construct();
    }
    
    
    function index(){
        
        $this->load->view("/template/topo");
        $this->load->view("/compania");
        $this->load->view("/template/rodape");
        
    }
    
    
}



?>

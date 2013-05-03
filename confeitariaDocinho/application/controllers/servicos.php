<?php
class Servicos extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function index() {
        
        $this->load->view("/template/topo");
        $this->load->view("/servicos");  
        $this->load->view("/template/rodape");
        
    }
    
    
}
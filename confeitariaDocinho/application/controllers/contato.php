<?php
class Contato extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
    
    $this->load->view("/template/topo");
    $this->load->view("/contato");
    $this->load->view("/template/rodape");
    
    
    }
}
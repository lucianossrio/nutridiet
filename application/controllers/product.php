<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->library('session');
        if(!isset($this->session->userdata('logado'))){
            header("login");
        }
        
        $this->load->view('product');
    }
    
    public function add(){
        if(!$_POST){
            $this->load->view('addProduct');
        }
        
        $name = $this->input->post('name');
        $idprice = $this->input->post('idprice');
        $idbrand = $this->input->post('idbrand');
        $idmodel = $this->input->post('idmodel');
        $idproduct_status = $this->input->post('idproduct_status');
        $idcolor = $this->input->post('idcolor');
        
        
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
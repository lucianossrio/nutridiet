<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

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
        parent::Controller();
        $this->load->helper('url', 'form');
        error_reporting(E_ALL);
        if ($this->session->userdata('logado') == false) {
            $this->doLogin();
        }
    }

    public function doLogin() {
        if (!$_POST) {
            $this->load->view('login');
        } else {

            $email = $this->input->post('email', true);
            $senha = $this->input->post('senha', true);

            echo $email ."<br>".$senha;

            $this->load->model('Paciente_DAO');
            echo 1;
            $Paciente = $this->PacienteDAO->doLogin($email, $senha);

            echo "aeee";

            echo "<pre>" . print_r($Paciente, true) . "</pre>";

            $this->session->set_userdata('paciente', $paciente);
            $this->session->set_userdata('logado', true);
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
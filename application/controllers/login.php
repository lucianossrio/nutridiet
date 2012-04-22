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
        parent::__construct();
        if ($this->session->userdata('logado') == false) {
            $this->doLogin();
        } else {
            header('Location: '.base_url());
        }
    }

    public function doLogin() {
        if (!$_POST) {
            $data['msg'] = '';
            $this->load->view('login',$data);
        } else {

            $email = $this->input->post('email', true);
            $senha = md5($this->input->post('senha', true));
            $this->load->model('Paciente_DAO');
            $result = $this->Paciente_DAO->doLogin($email, $senha);
            $Paciente =  $result[0];

            if (is_object($Paciente)){
                $this->session->set_userdata('paciente', $Paciente);
                $this->session->set_userdata('logado', true);
                header('Location: '.base_url());
            } else {
                $data['msg'] = 'Login ou senha inválidos';
                $this->load->view('login',$data);
            }
        }
    }

    public function doLogoff(){
        $this->session->sess_destroy();
        header('Location: '.site_url('login'));
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
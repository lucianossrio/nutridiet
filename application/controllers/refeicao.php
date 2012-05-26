<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Refeicao extends CI_Controller {

        private $Paciente;

	public function index()
	{
            parent::__construct();
            $this->load->helper('url');
            if ($this->session->userdata('logado') == false) {
                header('Location: '.site_url('login'));
            } else {
                $this->load->model('Refeicao_DAO');
                $this->Paciente = $this->session->userdata('paciente');
                $data['nome'] = $this->Paciente->nome;
                $data['unidades'] = $this->getUnidadesMedida();
                $this->load->view('ingrediente', $data);
            }
	}

        public function getUnidadeMedidaPorAlimento(){
            $alimento = $this->input->get('ali');
            $return = array();
            $medidas = $this->Refeicao_DAO->getUnidadeMedidaPorAlimento($alimento);
            foreach ($medidas as $medida){
                $return[] = array ('id_unidade_medida' => $medida->id_unidade_medida, 'unidade' => $medida->unidade);
            }
            echo json_encode($return);        
        }

        public function getUnidadesMedida(){
            $return = array();
            
            $medidas = $this->Refeicao_DAO->getUnidadesMedida();
            foreach ($medidas as $medida){
                $return[] = array ('id_unidade_medida' => $medida->id_unidade_medida, 'unidade' => $medida->unidade);
            }
            return $return;
        }

        public function salvar(){
            $this->Paciente = $this->session->userdata('paciente');
            $data_inserido = date('Y-m-d H:i:s');
            $this->load->model('Refeicao_DAO');

            $alimentos = array();

            $alimentos[0]['nome'] = $this->input->post('alimento');
            $alimentos[0]['quantidade'] = $this->input->post('quantidade');
            $alimentos[0]['id_unidade_medida'] = $this->input->post('id_unidade_medida');

            $alimentos[1]['nome'] = $this->input->post('alimento1');
            $alimentos[1]['quantidade'] = $this->input->post('quantidade1');
            $alimentos[1]['id_unidade_medida'] = $this->input->post('id_unidade_medida1');

            $id_paciente = $this->Paciente->id_paciente;

            $id_refeicao = $this->Refeicao_DAO->salvarRefeicao($data_inserido, $id_paciente);
            echo $id_refeicao;

        }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
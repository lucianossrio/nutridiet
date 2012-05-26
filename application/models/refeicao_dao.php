<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Refeicao_DAO extends CI_Model {

    public function Refeicao_DAO(){
        parent::__construct();
        $this->load->database("nutridiet");
    }

    public function doLogin($email, $senha){
        $qry = "SELECT * FROM nutridiet.paciente WHERE email = ? AND senha = ?";
        $params = array ( $email, $senha );
        $result = $this->db->query($qry, $params);
        
        if ($result->num_rows() == 0){
            return false;
        }
        
        return $result->result();
    }

    public function getUnidadeMedidaPorAlimento($alimento){
        $alimento = strtolower($alimento);
        $qry = "SELECT um.* FROM nutridiet.unidade_medida um
                JOIN nutridiet.tabela_nutricional tn on  um.id_unidade_medida = tn.id_unidade_medida
                JOIN nutridiet.alimento a on tn.id_alimento = a.id_alimento WHERE a.nome = ?";
        $params = array ( $alimento );
        $result = $this->db->query($qry, $params);

        if ($result->num_rows() == 0){
            return false;
        }

        return $result->result();
    }

    public function getUnidadesMedida(){
        $qry = "SELECT um.* FROM nutridiet.unidade_medida um";
        $result = $this->db->query($qry, array());

        if ($result->num_rows() == 0){
            return false;
        }

        return $result->result();
    }

    public function salvarRefeicao($data, $id_paciente){
        $qry = "INSERT INTO nutridiet.refeicao (data_inserido, id_paciente) VALUES (?, ?)";
        $result = $this->db->query($qry, array($data, $id_paciente));

        if ($result->num_rows() == 0){
            return false;
        }
        return $this->db->insert_id();
    }
}

?>

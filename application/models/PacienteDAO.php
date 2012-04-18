<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PacienteDAO extends Model {

    private $db;


    public function PacienteDAO(){
        parent::Model();
        $this->db = $this->load->database("nutridiet");
    }

    public function login($email, $senha){
        $qry = "SELECT * FROM nutridiet.paciente WHERE email = ? AND senha = ?";
        $params = array ( $email, $senha );
        $result = $this->db->query($qry, $params);
        return $result->fetch_array();
    }

}

?>

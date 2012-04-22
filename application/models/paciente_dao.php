<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Paciente_DAO extends CI_Model {

    public function Paciente_DAO(){
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

}

?>

<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Paciente_DAO extends Model {

    private $db;

    public function Paciente_DAO(){
        parent::Model();
        echo "aqui";
        $this->db = $this->load->database("nutridiet");
        echo "chamou";
    }

    public function doLogin($email, $senha){
        echo "aqui";
        $qry = "SELECT * FROM nutridiet.paciente WHERE email = ? AND senha = ?";
        $params = array ( $email, $senha );
        $result = $this->db->query($qry, $params);

        return $result->fetch_array();
    }

}

?>

<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Paciente {

    private $id_paciente;
    private $nome;
    private $email;
    private $senha;
    private $cpf;
    private $endereco;
    private $telefone;
    private $altura;
    private $nascimento;
    private $genero;

    public function getID(){
        return $this->id_paciente;
    }
    
    public function getNome(){
        return $this->nome;
    }

}

?>

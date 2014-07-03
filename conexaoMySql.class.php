<?php

class Conexao {
    public $servidor = 'localhost';
    public $usuario = 'root';
    public $senha = 'root';
    public $banco = 'banco';
    
    
    public function conectar() {
        mysql_connect($this->servidor,$this->usuario,$this->senha) or die (mysql_error());
    }
    
    public function selecionarBD()
    {
        mysql_select_db($this->banco) or die (mysql_error());
    }

    public function fechar($conexao){
        mysql_close($conexao);
    }
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
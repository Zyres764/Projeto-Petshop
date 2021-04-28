<?php

Class User {

    var $id;
    var $nome;
    var $sobrenome;
    var $idade;
    var $password;
    var $email;


    public function __construct(){}
        
    public function __set($propriedade, $valor){
        $this->propriedade = $valor;
    }    
    public function __get($propriedade){
        return $this->propriedade;
    }
}
 


?>
<?php

Class Proprietario {

    var $id;
    var $nome;
    var $Estabelecimento;
    var $CNPJ;



    public function __construct(){}
        
    public function __set($propriedade, $valor){
        $this->propriedade = $valor;
    }    
    public function __get($propriedade){
        return $this->propriedade;
    }
}
 


?>
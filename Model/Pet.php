<?php

Class User {

    var $id;
    var $nomePet;
    var $racaPet;
    var $dono;


    public function __construct(){}
        
    public function __set($propriedade, $valor){
        $this->propriedade = $valor;
    }    
    public function __get($propriedade){
        return $this->propriedade;
    }
}
 


?>
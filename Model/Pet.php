<?php

Class User {

    var $id;
    var $user_id;
    var $nomePet;
    var $racaPet;



    public function __construct(){}
        
    public function __set($propriedade, $valor){
        $this->propriedade = $valor;
    }    
    public function __get($propriedade){
        return $this->propriedade;
    }
}
 


?>
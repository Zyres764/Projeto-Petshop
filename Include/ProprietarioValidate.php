<?php
    class ProprietarioValidate {
        public static function testarNome($paramNome) {
            if ($paramNome < 3){
                return false;
            }
            else {
                return true;
            }
            }

            public static function testarEstabelecimento($paramEstabelecimento) {
                
                if ($paramEstabelecimento < 3) {
                    return false;
                }
                else {
                    return true;
                }
            }
    }


?>
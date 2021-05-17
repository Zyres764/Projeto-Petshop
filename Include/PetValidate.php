<?php
    class UserValidate {
        public static function testarNome($paramNome) {
            if ($paramNome < 3){
                return false;
            }
            else {
                return true;
            }
            }

            public static function testarRaca($paramRaca) {
                
                if ($paramRaca < 3) {
                    return true;
                }
                else {
                    return false;
                }
            }
    }


?>
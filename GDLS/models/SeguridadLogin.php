<?php
    class SeguridadLogin extends DB{
        public function seguridad(){
            if(empty($_SESSION['ADMIN']) || is_null($_SESSION['ADMIN'])){
              header("location:?c=Login&m=index");
            }
        }
    }
?>
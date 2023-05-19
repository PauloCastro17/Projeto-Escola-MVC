<?php

namespace Source;

use Exception;

class Validation{

    public static function validaAuth(){
        session_start();

        try {
            if(!isset($_SESSION['id'])){
                throw new Exception("SESSÃO NÃO EXISTE");
                header('Location: /sair');
            }
        } catch (Exception $e) {
            header('Location: /sair');
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }
}

?>
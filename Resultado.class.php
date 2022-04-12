<?php

class Resultado{

    private $nome;
    private $email;

    public function _construct(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    }
}

?>
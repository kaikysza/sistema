<?php
class Usuario{
    public $codigo,$nome, $login, $senha, $cargo;

    function __construct($codigo,$nome, $login, $senha, $cargo) {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->senha = $senha;
            $this->login = $login;
            $this->cargo = $cargo;
    }
    
    function validaUsuarioSenha($login, $senha) {
        if($login == $this->login && $senha == $this->senha) {
            return true;
        }
        return false;
    }
}
?>
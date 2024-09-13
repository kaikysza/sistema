<?php
include_once 'database.php';
include_once 'usuario.php';

session_start(); // Inicia a sessão


if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $consulta = mysqli_query($conexao, "SELECT idusuario, nomeusuario, login, senha, cargo FROM usuario WHERE login = '" . $usuario . "'");
    $dados = mysqli_fetch_assoc($consulta);
    $user = null;
    if ($dados != null) {
        $user = new Usuario($dados["idusuario"], $dados["nomeusuario"], $dados["login"], $dados["senha"], $dados["cargo"]);
    }

    if ($user != null && $user->validaUsuarioSenha($usuario, $senha)) {
        $_SESSION['user'] = $user;
        header('Location: ../Menu/index.php');
        exit();
    } else {
        $_SESSION['msg'] = "Usuário ou senha incorretos!!!";
        header("Location: ../Login/index.php");
        exit();
    }
?>

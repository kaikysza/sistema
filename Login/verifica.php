<?php
$usuarioCorreto = 'usuario123';
$senhaCorreta = 'senha123';

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
    header('Location: ../Menu/index.html');
    exit();
} else {
    header('Location: index.php?error=Usu%C3%A1rio%20ou%20senha%20incorretos.');
    exit();
}
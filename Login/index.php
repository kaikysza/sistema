<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPM Wear</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (isset($_SESSION['msg'])): ?>
        <p style="color: red;"><?php echo $_SESSION['msg']; ?></p>
        <?php unset($_SESSION['msg']);?>
    <?php endif; ?>
    <div class="wrapper">
        <div class="form-box login">
            <img src="logo.png" alt="Logo" class="logo">
            <h2>Faça seu Acesso</h2>
            <form action="../Classes/verifica.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="usuario" required>
                    <label>Usuário</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="senha" required>
                    <label>Senha</label>
                </div>
                <button type="submit" class="btn">Acessar</button>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

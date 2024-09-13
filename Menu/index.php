<?php
include_once '../Classes/database.php';
include_once '../Classes/usuario.php';
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> 
    <title>RPM Wear</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="Logo">
                </span>
                <div class="text logo-text">
                    <h1 class="name">Olá, <?php echo $_SESSION['user']->nome ?></h1>
                    <h1 class="profession"> <?php echo $_SESSION['user']->cargo ?></h1>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-menu icon' ></i>
                            <span class="text nav-text">Menu</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-cart-alt icon' ></i>
                            <span class="text nav-text">Vendas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-male-female icon' ></i>
                            <span class="text nav-text">Clientes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-closet icon' ></i>
                            <span class="text nav-text">Produtos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-package icon'></i>
                            <span class="text nav-text">Estoque</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-store icon' ></i>
                            <span class="text nav-text">Fornecedores</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Relatórios</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">Usuários</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                 <li>
                     <a href="../classes/logout.php">
                         <i class='bx bx-log-out icon'></i>
                         <span class="text nav-text">Sair</span>
                     </a>
                </li>
            </div>
        </div>
    </nav>
    <section class="home">


    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
</body>
</html>
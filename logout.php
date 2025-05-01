<?php
require_once 'includes/config.php';
require_once 'includes/auth.php';

// Registra o log de logout
if (isset($_SESSION['user_id'])) {
    registrarLog($_SESSION['user_id'], 'logout', 'usuarios', $_SESSION['user_id'], null, null);
}

// Destrói a sessão
destroyUserSession();

// Redireciona para a página de login
redirect('login.php');
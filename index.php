<?php
require_once 'includes/config.php';

// Redireciona para a página apropriada
if (file_exists('login.php')) {
    header('Location: login.php');
} else {
    die('Sistema não configurado corretamente. Arquivo login.php não encontrado.');
}
exit();
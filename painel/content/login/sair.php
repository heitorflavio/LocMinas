<?php
session_start();
$_SESSION['autenticado'] = 'reprovado';
session_destroy();

header('location: /painel/content/login.php ');
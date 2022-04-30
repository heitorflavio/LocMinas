<?php
session_start();
session_destroy();
$_SESSION['autenticado'] = 'reprovado';

header('location: /painel/content/login.php ');
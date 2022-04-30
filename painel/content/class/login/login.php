<?php
require('../../../config/start.php');
require('../../../config/funcoes.php');

session_start();

$funcoes = new Funcoes();



$_SESSION['autenticado'] = false;



$email = $_POST['email'];
$pass = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE email='$email'";
$result = $sqli->query($query)->fetch_array();

$pass_crypt = $funcoes->encrypt_decrypt('decrypt', $result['senha']);
// print_r($_POST);
// exit;

if ($email != $result['email'] || $pass != $pass_crypt) {
    $_SESSION['autenticado'] = false;
    header('location: /painel/content/login/login.php ');
    
} if($email == $result['email'] && $pass == $pass_crypt){
    $_SESSION['autenticado'] = 'Aprovado';
    $_SESSION['user'] = $result['nome'];
    header('location: /painel/content/home.php ');
}

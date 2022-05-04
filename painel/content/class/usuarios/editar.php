<?php
require('../../../config/start.php');
require('../../../config/funcoes.php');

$funcoes = new Funcoes();

$pass = $_POST['pass'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$pass_crypt = $funcoes->encrypt_decrypt('encrypt', $pass);


$query = "UPDATE usuarios SET id='$id', login='0', senha='$pass_crypt', nome='$nome', email='$email', telefone='$telefone'";
$sqli->query($query);



header('location: ../../home.php');
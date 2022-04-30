<?php
require('../../../config/start.php');
require('../../../config/funcoes.php');

$funcoes = new Funcoes();

$pass = $_POST['pass'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$pass_crypt = $funcoes->encrypt_decrypt('encrypt', $pass);


$query = "INSERT INTO usuarios(id, login, senha, nome, email, telefone) VALUES (id, '0', '$pass_crypt', '$nome', '$email', '$telefone')";
$sqli->query($query);



header('location: ../../home.php');
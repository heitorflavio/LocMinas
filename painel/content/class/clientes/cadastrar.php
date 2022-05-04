<?php
require('../../../config/start.php');


$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf= $_POST['cpf'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$obs = $_POST['obs'];
$data = date('Y-m-d');

// print_r($nome);
// print_r($email);
// print_r($rua);
// print_r($cpf);
// print_r($bairro);
// print_r($numero);
// print_r($telefone);
// print_r($obs);
// exit;

$query = "INSERT INTO clientes(id, nome_nomeF, email, rua, bairro, numero, telefone, celular, cpf, cnpj, tipo, status, observacao, data_cadastro) VALUES (id,'$nome','$email','$rua','$bairro','$numero','$telefone','$celular','$cpf',0,1,1,'$obs','$data')";
$sqli->query($query);

header('location: /painel/content/home.php ');
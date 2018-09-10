<?php
session_start();
include_once 'conexao.php';
$id =$_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$nome_animal = filter_input(INPUT_POST, 'nome_animal', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("update tb_clientes set nome='$nome', endereco='$endereco', telefone='$telefone', email='$email', nome_animal='$nome_animal' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("Location:../consultas.php");
endif;
        
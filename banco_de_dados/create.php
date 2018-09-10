<?php
session_start();
if ( !isset($_SESSION["user_portal"])){
    header("location:login.php");
}
include_once 'conexao.php';


$nome        = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$endereco    = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
$telefone    = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$email       = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$nome_animal = filter_input(INPUT_POST, 'nome_animal', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect  = $link->query("select email from tb_clientes");
$array_emails = [];

while ($emails = $querySelect->fetch_assoc()):
    $emails_existentes = $emails['email'];
    array_push($array_emails,$emails_existentes);
endwhile;

if(in_array($email,$array_emails)):
    $_SESSION['msg'] = "<p class='center red-text'>".'Já existe um Cliente cadastrado com esse Email'."</p>";
    header("Loaction:../");
    
    else:
        $queryInsert = $link->query("insert into tb_clientes values (default,'$nome','$endereco','$telefone','$email','$nome_animal')");
        $affected_rows = mysqli_affected_rows($link);
    
    if($affected_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com Sucesso!'."<br>";
        header("Location:../");
    endif;
endif;

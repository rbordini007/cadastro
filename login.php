<?php
    include_once 'banco_de_dados/conexao.php'?>
<?php
    // adicionar variavel de sessao
    session_start();

    if(isset($_POST["usuario"])  ){
        $usuario = $_POST["usuario"];
        $senha   = $_POST["senha"];
        
        $login = "SELECT * ";
        $login .= "FROM tb_login ";
        $login .= "where usuario = '{$usuario}' and senha = '{$senha}'";
        
        $acesso = mysqli_query($conecta, $login);
        if ( !$acesso){
            die("Falha na consulta ao banco de dados");
    }
    
    $informacao = mysqli_fetch_assoc($acesso);
    
    if ( empty($informacao) ){
        $mensagem = "Login sem Sucesso.";
    } else {
        $_SESSION["user_portal"] = $informacao["id_login"];
         header("Location:index.php");
    }
    }
?> 

<?php include_once 'includes/header.inc.php' ?>

<!doctype html>        
<!-- login  -->
<html>
    <head>
        <meta charset="utf8">
      
    </head>
    <body>    
        <main>
            
            <nav class="blue-grey" style="padding: 10px">
                <div class="brand-logo light center"> Clinica Veterinaria</div>
                <div class="" id="janela_login">
                    <form action="login.php" method="post">
                        <h2>Tela de Login</h2>
                        <input type="text" name="usuario" placeholder="Usuário">
                        <input type="password" name="senha" placeholder="Senha">
                        <input type="submit" value="Login">
                        <?php 
                            if (isset($mensagem)) {
                        ?>
                        <p>
                            <?php echo $mensagem ?>
                        </p>
                        <?php 
                            }
                        ?>                     
                        
                        
                    </form>    
                </div>
            </nav>
        </main>
    </body>    
</html>



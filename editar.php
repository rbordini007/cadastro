<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5><hr>
    </div>
</div>

<?php
    include_once 'banco_de_dados/conexao.php';
    
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['id'] = $id;
    $querySelect = $link->query("select * from tb_clientes where id='$id'");
    
    while($registros = $querySelect->fetch_assoc()):
        $nome        = $registros['nome'];
        $endereco    = $registros['endereco'];
        $telefone    = $registros['telefone'];
        $email       = $registros['email'];
        $nome_animal = $registros['nome_animal'];
    endwhile;  
?>

   <!-- FORMULÁRIO DE CADASTRO -->
        <div class="row container">
            <p>&nbsp;</p>
            <form action="banco_de_dados/update.php" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 15px">
                    <legend><img src="imagens/avatar1.png.jpg" alt="(imagem)" width="100"></legend>
                    <h5 class="light center">Alteração</h5>
                                    
                                       
                    <!-- NOME -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
                        <label for="nome"></label>
                    </div>
                    
                    <!-- Endereço -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">place</i>
                        <input type="text" name="endereco" id="endereco" value="<?php echo $endereco ?>" maxlength="100" required>
                        <label for="endereco"></label>
                    </div>
                    
                    <!-- Telefone -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="15"required>
                        <label for="telefone"></label>
                    </div>
                    
                    <!-- Email -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input type="email" name="email" id="Email" value="<?php echo $email ?>" maxlength="50" required>
                        <label for="email"></label>
                    </div>
                    
                    <!-- Nome do animal -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="nome_animal" id="nome_animal" value="<?php echo $nome_animal ?>" maxlength="40" required>
                        <label for="nome_animal"></label>
                    </div>
                    
                    <!-- Botões-->
                    <div class="input-field col s12">
                        <input type="submit" value="Alterar" class="btn blue">
                        <a href="consultas.php" class="btn red">Cancelar</a>
                    </div>
                    
                </fieldset>
            </form>
        </div>

<?phpinclude_once 'includes/footer.inc.php' ?>
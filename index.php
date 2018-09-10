<?php session_start();
 ?>

<?php include_once 'includes/header.inc.php' ?>

    <?php include_once 'includes/menu.inc.php' ?>  


          
        <!-- FORMULÁRIO DE CADASTRO -->
        <div class="row container">
            <p>&nbsp;</p>
            <form action="banco_de_dados/create.php" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 15px">
                    <legend><img src="imagens/avatar1.png.jpg" alt="(imagem)" width="100"></legend>
                    <h5 class="light center">Cadastro de Clientes</h5>
                    
                    <?php 
                        if (isset($_SESSION['msg'])):
                            echo $_SESSION['msg'];
                            session_unset();
                        endif;
                    ?>
                                        
                    <!-- NOME -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                        <label for="nome">Nome do Cliente</label>
                    </div>
                    
                    <!-- Endereço -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">place</i>
                        <input type="text" name="endereco" id="endereco" maxlength="100" required>
                        <label for="endereco">Endereço do Cliente</label>
                    </div>
                    
                    <!-- Telefone -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input type="tel" name="telefone" id="telefone" maxlength="15" required>
                        <label for="telefone">Telefone do Cliente</label>
                    </div>
                    
                    <!-- Email -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input type="email" name="email" id="Email" maxlength="50" required>
                        <label for="email">Email do Cliente</label>
                    </div>
                    
                    <!-- Nome do animal -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="nome_animal" id="nome_animal" maxlength="40" required>
                        <label for="nome_animal">Nome do Animal</label>
                    </div>
                    
                    <!-- Botões-->
                    <div class="input-field col s12">
                        <input type="submit" value="cadastrar" class="btn blue">
                        <input type="reset" value="limpar" class="btn red">
                    </div>
                    
                </fieldset>
            </form>
        </div>
        
<?php include_once 'includes/footer.inc.php' ?>        

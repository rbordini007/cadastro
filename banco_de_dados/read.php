<?php
    include_once 'conexao.php';
    
    $querySelect = $link->query("select * from tb_clientes");
    while($registros = $querySelect->fetch_assoc()):
        $id          = $registros['id'];
        $nome        = $registros['nome'];
        $endereco    = $registros['endereco'];
        $telefone    = $registros['telefone'];
        $email       = $registros['email'];
        $nome_animal = $registros['nome_animal'];
        
        echo "<tr>";
        echo "<td>$nome</td><td>$endereco</td><td>$telefone</td><td>$email</td><td>$nome_animal</td>";
        echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edite</i></a></td>";
        echo "<td><a href='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
        echo "</tr>";
        
    endwhile;

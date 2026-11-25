<?php
    echo "<link rel='stylesheet' type='text/css' href='formata.css'/>";
    include 'conexao.php';
    $listar=$cmd->query("select * from tbteste");
    $total_registros=$listar->rowCount();
    if ($total_registros > 0)
    {
        echo "<h1>Excluir Registros</h1>";
        echo "<hr/>";
        echo "<table>";
        echo "<tr>
                <th colspan=6>
                    Clique em Excluir para apagar o registro
                </th>
              </tr>";
        echo "<tr>
                <th>Código</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Sexo</th>
                <th>Nascimento</th>
                <th>Ação</th>
              </tr>";

        while($linha=$listar->fetch(PDO::FETCH_ASSOC))
        {
            $vcodi=$linha['codi_t'];
            $vnome=$linha['nome_t'];
            $vemai=$linha['emai_t'];
            $vsexo=$linha['sexo_t'];
            $vdtna=$linha['dtna_t'];
            echo "<tr>
                    <td>$vcodi</td>
                    <td>$vnome</td>
                    <td>$vemai</td>
                    <td>$vsexo</td>
                    <td>$vdtna</td>
                    <td><a class='botao_menu botao_excluir' href='excluir.php?codigo=$vcodi' onclick=\"return confirm('Tem certeza que deseja excluir este registro?');\">Excluir</a></td>
                  </tr>";
        }
        echo "</table>";
        echo "<br/><br/>";
        echo "<a class='botao_menu' href='index.html'>Menu</a>";
    }
    else
    {
        echo "<script language=javascript>
                window.alert('Não existem registros para excluir!!!');
                location.href='index.html';
              </script>";
    }
?>
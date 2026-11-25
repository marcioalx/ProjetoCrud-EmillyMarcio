<?php
    echo "<link rel='stylesheet' type='text/css' href='formata.css'/>";
    include 'conexao.php';

    // aceita o código pela URL (botão da lista) ou pelo formulário antigo
    if (isset($_GET['codigo'])) {
        $vcodi = intval($_GET['codigo']);
    } elseif (isset($_POST['txtcodigo'])) {
        $vcodi = intval($_POST['txtcodigo']);
    } else {
        $vcodi = 0;
    }

    $excluir = $cmd->prepare("delete from tbteste where codi_t = ?");
    $excluir->execute([$vcodi]);

    if ($excluir->rowCount() > 0)
    {
        echo "<script language='JavaScript'>
                alert('Registro excluído com sucesso!!!');
                location.href='crud_excluir.php';
              </script>";
    }
    else
    {
        echo "<script language='JavaScript'>
                alert('Não apagou o código $vcodi. Veja se ele existe na lista.');
                location.href='crud_excluir.php';
              </script>";
    }
?>
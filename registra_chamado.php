<?php
    session_start();
    $arquivo = fopen("/tmp/arquivo.hd", "a");
    $texto = $_SESSION['id']."#"; 
    $texto .= implode("#", $_POST);
    $texto .= PHP_EOL;

    fwrite($arquivo, $texto);
    fclose($arquivo);

    header("Location: abrir_chamado.php");
?>
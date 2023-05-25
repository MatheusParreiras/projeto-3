<?php

require_once 'conectar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    $sql = "INSERT INTO publicacoes (titulo, conteudo, data_publicacao) VALUES ('$titulo', '$conteudo', NOW())";
    if ($conn->query($sql) === TRUE) {
        echo "Publicação criada com sucesso.";
    } else {
        echo "Erro ao criar publicação: " . $conn->error;
    }
}
?>

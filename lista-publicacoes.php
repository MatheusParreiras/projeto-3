<?php
require_once 'conectar.php';


$sql = "SELECT * FROM publicacoes";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $titulo = $row['titulo'];
        $conteudo = $row['conteudo'];
        $data_publicacao = $row['data_publicacao'];

        echo "<h2>$titulo</h2>";
        echo "<p>Data de Publicação: $data_publicacao</p>";
        echo "<p>$conteudo</p>";
        echo "<hr>";
    }
} else {
    echo "Não há publicações disponíveis.";
}
?>

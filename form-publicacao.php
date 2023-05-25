<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Publicação</title>
</head>
<body>
    <h1>Criar Publicação</h1>
    <form action="gravar-publicacao.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>

        <label for="conteudo">Conteúdo:</label>
        <textarea name="conteudo" id="conteudo" rows="5" required></textarea>

        <input type="submit" value="Criar Publicação">
    </form>
</body>
</html>

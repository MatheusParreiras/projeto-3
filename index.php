

<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<body>
    <h2>Página Principal</h2>
    <a href="gravar-publicacao.php">Criar Nova Tarefa</a><br><br>

    <table>
        <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de Criação</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($tarefas as $tarefa): ?>
            <tr>
                <td><?php echo $tarefa["titulo"]; ?></td>
                <td><?php echo $tarefa["descricao"]; ?></td>
                <td><?php echo $tarefa["data_criacao"]; ?></td>
                <td>
                    <a href="editar_tarefa.php?id=<?php echo $tarefa["id"]; ?>">Editar</a>
                    <a href="excluir_tarefa.php?id=<?php echo $tarefa["id"]; ?>" onclick="return confirm('Tem certeza que deseja excluir essa tarefa?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="logoff.php">Sair</a>
</body>
</html>


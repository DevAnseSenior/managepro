<?php
    require '../config.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM projects");
    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll( PDO::FETCH_ASSOC );
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projetos - ManagePRO</title>
        <!--<link rel="stylesheet" href="assets/css/">-->
    </head>
    <body>
        <header>
            <div>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Projetos</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </div>
        </header>
        <div>
            <div>
                <a href="cadastrar.php">Novo Projeto</a>  
            </div>
            <div>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data Inicial</th>
                            <th>Data Final</th>
                            <th>Valor Investido</th>
                            <th>Risco</th>
                            <th>Colaboradores</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista as $projeto): ?>
                        <tr>
                            <td><?=$projeto['id']; ?></td>
                            <td><?=$projeto['name']; ?></td>
                            <td><?=$projeto['sttDate']; ?></td>
                            <td><?=$projeto['endDate']; ?></td>
                            <td><?=$projeto['valueP']; ?></td>
                            <td><?=$projeto['risk']; ?></td>
                            <td><?=$projeto['contributors']; ?></td>
                            <td>
                                <a href="#">[Simular Investimento]</a>
                                <a href="editar.php?id=<?=$projeto['id']; ?>">[Editar]</a>
                                <a href="excluir.php?id=<?=$projeto['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
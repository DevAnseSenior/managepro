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
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/default.css">
        <link rel="stylesheet" href="../assets/css/projects.css">
    </head>
    <body>
        <div class="container">
            <header class="container">
                <div class="logo"><a href="">ManagePRO</a></div>
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Projetos</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                    </ul>
                </nav>
            </header>
            <div class="main">
                <div>
                    <a class="btn btn-primary add" href="cadastrar.php">Novo Projeto</a>  
                </div>
                <div>
                    <table class="table table-bordered table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
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
                                <td>
                                    <?php
                                        $data = $projeto['sttDate'];
                                        $dataI = implode("/", array_reverse(explode("-", $data)));
                                        echo $dataI;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        $data = $projeto['endDate'];
                                        $dataF = implode("/", array_reverse(explode("-", $data)));
                                        echo $dataF;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        $valor = number_format($projeto['valueP'], 2, ',', '.');
                                        echo "R$ $valor";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        $risco = $projeto['risk'];
                                        
                                        switch($risco) {
                                            case 0:
                                                echo 'Baixo';
                                                break;
                                            case 1:
                                                echo 'Mediano';
                                                break;
                                            case 2:
                                                echo 'Alto';
                                                break;
                                        }
                                    ?>
                                </td>
                                <td><?=$projeto['contributors']; ?></td>
                                <td>
                                    <a class="btn btn-outline-primary" href="#">Simular Investimento</a>
                                    <a class="btn btn-outline-warning" href="editar.php?id=<?=$projeto['id']; ?>">Editar</a>
                                    <a class="btn btn-outline-danger" href="actions/excluir_action.php?id=<?=$projeto['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <footer>
                <div>
                    <div>
                        Todos os direitos reservados©Lorem Ipsum Inc.
                    </div>
                </div>
            </footer>
        </div>

        <script src="../assets/js/jquery-3.5.1.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
    require '../config.php';

    $info = [];
    $id = filter_input(INPUT_GET, 'id');
    if($id) {
        $sql = $pdo->prepare("SELECT * FROM projects WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $info = $sql->fetch( PDO::FETCH_ASSOC);
        } else {
            header("Location: projetos.php");
            exit;
        }
    } else {
        header("Location: projetos.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Projeto - ManagePRO</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/default.css">
        <link rel="stylesheet" href="../assets/css/edit.css">
    </head>
    <body>
        <div class="container">
            <header class="container">
                <div class="logo"><a href="">ManagePRO</a></div>
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="projetos.php">Projetos</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                    </ul>
                </nav>
            </header>
            <div class="main">
                <div class="fspace">
                    <form method="POST" action="actions/editar_action.php">
                        <input type="hidden" name="id" value="<?=$info['id']; ?>">
                        
                        <div class="form-group">
                            <label for="name">Nome do projeto:</label>
                            <input class="form-control" id="name" type="text" name="name" value="<?=$info['name']; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="startDate">Data de inicio:</label>
                            <input class="form-control" id="startDate" type="date" name="startDate" value="<?=$info['sttDate']; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="endDate">Data de término:</label>
                            <input class="form-control" id="endDate" type="date" name="endDate" value="<?=$info['endDate']; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="valueP">Valor do projeto:</label>
                            R$<input class="form-control" id="valueP" type="number" name="valueProj" value="<?=$info['valueP']?>">
                        </div>

                        <div class="form-group">
                        <label for="risk">Risco (0 - Baixo, 1 - Mediano, 2 - Alto):</label>
                            <input class="form-control" id="risk" type="text" name="risk" value="<?=$info['risk']; ?>">
                        </div>

                        <div class="form-group">
                            <label form="contributors">Membros do projeto:</label>
                            <textarea class="form-control" id="contributors" name="contributors" cols="30" rows="5"><?=$info['contributors']; ?></textarea>
                        </div>

                        <input class="btn btn-primary form-control" type="submit" value="Salvar">
                    </form>
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
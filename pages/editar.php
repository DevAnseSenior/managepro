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
        <!-- <link rel="stylesheet" href="assets/css/"> -->
    </head>
    <body>
        <header>
            <div>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="projetos.php">Projetos</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </div>
        </header>
        <div>
            <div>
                <form method="POST" action="actions/editar_action.php">
                    <input type="hidden" name="id" value="<?=$info['id']; ?>">
                    
                    <label>
                        Nome do projeto:<br>
                        <input type="text" name="name" value="<?=$info['name']; ?>">
                    </label><br><br>

                    <label>
                        Data de inicio:<br>
                        <input type="date" name="startDate" id="startDate" value="<?=$info['sttDate']; ?>">
                    </label><br><br>

                    <label>
                        Data de término:<br>
                        <input type="date" name="endDate" id="endDate" value="<?=$info['endDate']; ?>">
                    </label><br><br>

                    <label>
                        Valor do projeto:<br>
                        <input type="text" name="valueProj" value="<?=$info['valueP']; ?>">
                    </label><br><br>

                    <label>
                        Risco:<br>
                        <input type="text" name="risk" value="<?=$info['risk']; ?>">
                    </label><br><br>

                    <label>
                        Membros do projeto:<br>
                        <textarea name="contributors" cols="30" rows="5"><?=$info['contributors']; ?></textarea>
                    </label><br><br>

                    <input type="submit" value="Salvar">
                </form>
            </div>
        </div>
    </body>
</html>
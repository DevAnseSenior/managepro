<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Novo Projeto - ManagePRO</title>
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
                <form method="POST" action="actions/cadastrar_action.php">
                    <label>
                        Nome do projeto:<br>
                        <input type="text" name="name">
                    </label><br><br>

                    <label>
                        Data de inicio:<br>
                        <input type="date" name="startDate" id="startDate">
                    </label><br><br>

                    <label>
                        Data de término:<br>
                        <input type="date" name="endDate" id="endDate">
                    </label><br><br>

                    <label>
                        Valor do projeto:<br>
                        <input type="text" name="valueProj">
                    </label><br><br>

                    <label>
                        Risco:<br>
                        <select name="risk">
                            <option value=""></option>
                            <option value="0">Pequeno</option>
                            <option value="1">Mediano</option>
                            <option value="2">Grande</option>
                        </select>
                    </label><br><br>

                    <label>
                        Membros do projeto:<br>
                        <textarea name="contributors" cols="30" rows="5"></textarea>
                    </label><br><br>

                    <input type="submit" value="Cadastrar">
                </form>
            </div>
        </div>
    </body>
</html>
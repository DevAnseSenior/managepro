<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Novo Projeto - ManagePRO</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/default.css">
        <link rel="stylesheet" href="../assets/css/form.css">
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
                    <form method="POST" action="actions/cadastrar_action.php">
                        <div class="form-group">
                            <label for="name">Nome do projeto:</label>
                            <input class="form-control" id="name" type="text" name="name">
                        </div>
                        
                        <div class="form-group">
                            <label for="startDate">Data de inicio:</label>
                            <input class="form-control" id="startDate" type="date" name="startDate">
                        </div>

                        <div class="form-group">
                            <label for="endDate">Data de término:</label>
                            <input class="form-control" id="endDate" type="date" name="endDate" >
                        </div>
                        
                        <div class="form-group">
                            <label for="valueP">Valor do projeto:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" id="btnGroupAddon">R$</div>
                                </div>
                                <input class="form-control" id="valueP" type="number" name="valueProj">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="risk">Risco:</label>
                            <select class="form-control" id="risk" name="risk">
                                <option value=""></option>
                                <option value="0">Baixo</option>
                                <option value="1">Mediano</option>
                                <option value="2">Alto</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="contributors">Membros do projeto:</label>
                            <textarea class="form-control" id="contributors" name="contributors" cols="30" rows="5"></textarea>
                        </div>

                        <input class="btn btn-primary form-control" type="submit" value="Cadastrar">
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
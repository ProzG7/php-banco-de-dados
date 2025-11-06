<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="cadastro.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>
        </nav>
        <div id="cx_principal">
            <section>
                <h1 class="tit_cadastro">Cadastro de Usuários</h1>
                <br><br>

                <form method="post" action="processo.php">
                    <input type="submit" value="Salvar" class="btn"><br>
                    <input type="reset" value="Limpar" class="btn"><br>
                    <br>
                    <br>
                    <br>
                    Nome <br>
                        <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                    E-mail <br>
                        <input type="email" name="email" class="campo" maxlength="40" required><br>
                    Profissão <br>
                        <input type="text" name="profissao" class="campo" maxlength="40" required autofocus><br>


                </form>
            </section>
        </div>
        <footer>
            <p>&copy; 2025 - Meu Site de Cadastro</p>
        </footer>
    </div>
</body>
</html>
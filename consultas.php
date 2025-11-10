<?php
    include_once("conexao.php");
    $sql = "select * from usuarios"/
    $consulta = mysqli_query($conexao,$sql)/
    $registros = mysqli_num_rows($consulta)/

    mysqli_close($conexao);  
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="cx_principal">
        <section>
            <h1 class="tit_cadastro">Consultas de usuarios</h1>
            <br><br>

            <?php
            echo "Resultado para <strong> $filtro </strong> <br> <br> <br>"
            echo "$registros registros encontrados!";
            ?>
        </section>
    </div>
    
</body>
</html>
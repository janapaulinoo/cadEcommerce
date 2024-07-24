<?php
    include_once('controller/conexao.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de marca</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="center">
            <h1>Cadastro de marca</h1>
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <form action="insere-marca.php" method="post">
            <label for="">marca:</label>
            <input type="text" name="marca">
            <input type="submit" value="cadastrar">
        </form>
    </section>
</body>
</html>
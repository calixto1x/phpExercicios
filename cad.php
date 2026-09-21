<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <?php
        $nome = $_GET["nome"] ?? "";
        $sobrenome = $_GET["sobrenome"] ?? "";

        $nome = trim($nome);
        $sobrenome = trim($sobrenome);

        if ($nome == "" || $sobrenome == "") {
            echo "<p>Por favor, preencha seu nome e sobrenome.</p>";
        } else {
            $nomeSeguro = htmlspecialchars($nome);
            $sobrenomeSeguro = htmlspecialchars($sobrenome);

            echo "<p>Prazer em conhecer você, <strong>$nomeSeguro $sobrenomeSeguro</strong>!</p>";
        }
        ?>

        <a href="index.html">Voltar para o formulário</a>
    </main>
</body>
</html>
<?php
    $user = $_POST["txtUsuario"]; 
    $senha = $_POST["txtSenha"]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>Usuario:</b> <?php echo $user; ?>
    <br>
    <b>Senha:</b> <?php echo $senha; ?>
    <br>
    <?php 
    
    if ($user == "admin" && $senha == "1234") {
        echo "Usuario Valido";
    } else {
        echo "Usuario invalido";
    }
    ?>
</body>
</html>
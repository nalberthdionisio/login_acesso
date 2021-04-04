<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tarefa.css">
    <title>Document</title>
</head>
<body>
    
<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == 'back-end' && $senha == 'bacurim'){
?>
    <h2>Login realizado com sucesso</h2>
<?php
} 
else 
    header('location: http://localhost/login_acesso/index.php');
?>
</body>
</html>
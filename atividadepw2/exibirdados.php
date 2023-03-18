<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cor{
            background-color: #ff0000;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php

    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $peso = $_GET["peso"];

    if($idade > 17 && $peso > 100){
        echo "<body class='cor'> A pessoa $nome com $idade anos tem $peso quilos e é maior de idade<br> </body>";
        echo "Acima do peso, fazer regime";
        
    }
    else if($idade < 18 || $peso < 100){
        echo "A pessoa $nome com $idade anos tem $peso quilos e é menor de idade";
    }
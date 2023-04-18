<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];

echo "<h1>$nome</h1>" . PHP_EOL;
echo "<input value='$idade'>";

if(strlen($nome) < 20){
    echo "<p>Que nome pequeneza em!!!</p>";
}
if($idade <= 18){
    echo "<p>Parado! Você é menor de idade</p>";
} 
else{
    echo "<p>Você é maior de idade, parabéns!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-image: url(https://pbs.twimg.com/media/EwdO6bFXEAEyq-x.jpg);
            background-repeat: no-repeat;
            background-size: 100vh;
        }
    </style>
</head>
<body>
    
</body>
</html>
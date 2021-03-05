<?php



$nomeFuncionario = $_GET["nomeFuncionario"];
$salarioAtualFuncionario = $_GET["salarioAtualFuncionario"];


if($salarioAtualFuncionario < 5000){
    $aumento = 0.1;
}else if ($salarioAtualFuncionario >= 5000){
    $aumento = 0.2;
}

$novoSalario= $salarioAtualFuncionario + ($salarioAtualFuncionario * $aumento);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullbank New Cash</title>
</head>
<body>
    <h1>
    O(a) funcionário(a) <?= $nomeFuncionario ?>, a partir de agora, irá receber R$ <em><?= number_format($novoSalario  , 2, ",", ".") ?></em>.</h1>

</body>
</html>
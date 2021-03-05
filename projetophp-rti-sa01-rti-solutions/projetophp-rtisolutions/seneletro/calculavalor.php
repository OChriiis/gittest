<?php


    $nome = $_GET["nome"];
    $rua = $_GET["rua"];
    $numero = $_GET["numero"];
    $consumo = $_GET["consumo"];
    
    
    if($consumo > 120){
        $taxaporkWh = 0.42;
    }else if(
        $consumo <= 120){
            $taxaporkWh = 0.32;
        }
    
    $valorTotal = $consumo + ($consumo * $taxaporkWh);
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SENELETRO</title>
    </head>
    <body>
        <?php
            if($consumo > 120){
                ?>
                <h1> Conta de luz de <?= $nome ?></h1><h1>Rua <?= $rua ?>, <?= $numero ?></h1> <h1 style="color: red">Consumo: <?= $consumo ?>kWh</h1><h1>Valor total a pagar de: R$ <em><?= number_format($valorTotal , 2, ",", ".")?></em>.</h1></h1>
            <?php
            }else{
            ?>
                <h1>Conta de luz de <?= $nome ?></h1><h1>Rua <?= $rua ?>, <?= $numero ?></h1> <h1>Consumo: <?= $consumo ?>kWh</h1><h1>Valor total a pagar de: R$ <em><?= number_format($valorTotal , 2, ",", ".")?></em>.</h1></h1>
            <?php
            }
        ?>
    </body>
    </html>
    



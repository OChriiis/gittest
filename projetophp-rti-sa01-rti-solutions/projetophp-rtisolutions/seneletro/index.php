<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css">
    <title>SENELETRO</title>
</head>
<body>
<form method="$_GET" action="calculavalor.php">
   <h1>Calcular Valor</h1>
   <div class = "input-group">
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" required/>
   </div> 
   <div class = "input-group">
    <label for="rua">Rua</label>
    <input type="text" id="rua" name="rua" required/>
   </div> 
   <div class = "input-group">
    <label for="numeroRua">Número na Rua</label>
    <input type="number" id="numeroNaRua" name="numeroNaRua" required/>
   </div> 
   <div class = "input-group">
    <label for="consumo">Consumo em kWh (Consultar relógio de energia)</label>
    <input type="number" id="consumo" name="consumo" required/>
   </div> 
   <button>Calcular Total a pagar</button>
   <button type ="reset">Limpar</button>
</body>
</html>
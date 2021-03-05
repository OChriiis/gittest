<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css">
    <title>XD INVESTIMENTOS</title>
</head>
<body>
    <form method="GET" action="calculaconversao.php">
    <h1>Conversão Real em Euro ou Dólar</h1>
    <label for="valorReais">Valor em Reais: </label>
    <input type="number" name="valorReais" id="valorReais" placeholder="Valor R$" required/>
    <div>    
        <label for="dollar">Dollar </label>
        <input type="radio" name="moeda" id="dollar" value="Dollar" required/>

        <label for="euro">Euro </label>
        <input type="radio" name="moeda" id="euro" value="Euro" required/>
    </div>
    <button>Calcular Conversão</button>
   <button type ="reset">Limpar</button>
    
    
    
    </form>
</body>
</html>

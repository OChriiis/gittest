<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css">
    <title>Full Bank Salários</title>
</head>
<body>
    <form method="$_GET" action="calculasalario.php">
        <h1>Aumento do Salario</h1>
        <div class="input-group">
        <label for="nomeFuncionario">Nome do funcinário</label>
        <input type="text" name="nomeFuncionario" id="nomeFuncionario" required/>
        </div>
        
        <div class="input-group">
        <label for="salarioAtualFuncionario">Salario Atual (Sem casas decimais)</label>
        <input type="text" name="salarioAtualFuncionario" id="salarioAtualFuncionario" required/>
        </div>

        <button>Calcular novo salário</button>
        <button type ="reset">Limpar</button>
    </form>
</body>
</html>
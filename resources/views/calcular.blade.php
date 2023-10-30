<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador</title>
</head>
<body>
    <form action="/operacao/calcular/" method="GET">
        <form action="">
            <label for="">
                Numero 1 <input type="number" name="num1">
            </label>
            <label for="">
                Numero 2 <input type="number" name="num2">
            </label>
            <input type="submit" value="Enviar">
        </form>
        <div>
            {{ request('mensagem') }}
        </div>
    </form>
</body>
</html>
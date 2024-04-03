<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gera Recibo</title>
</head>
<body>
    <h1>Dados - Recibo</h1>
    <form action="/download" method="POST">
        @csrf
        <div>
            <label for="client"><h3>Cliente</h3></label>
            <input type="text" id="client" name="nomeCliente">
        </div>

        <div>
            <h3>Produto</h3>
            <input type="text" name="produto1"><br>
            <input type="text" name="produto2"><br>
            <input type="text" name="produto3"><br>
            <input type="text" name="produto4">
        </div>

        <div>
            <label for="description"><h3>Descrição</h3></label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="value"><h3>Valor</h3></label>
            <input type="text" id="value" name="valor">
        </div>

        <button class="btn btn-primary" type="submit" formaction="/download">Download</button>
        <button class="btn btn-secondary" type="submit" formaction="/imprimir">imprimir</button>
    </form>
</body>
</html>
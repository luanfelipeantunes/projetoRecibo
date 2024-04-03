<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Recibo</h1>
    <p>Recebemos de: <span>{{$nomeCliente}}</span></p>

    <h2>R$: <span>{{$valor}}</span></h2>

    <div>
        <h2>Produtos: </h2>
        <p>{{$produto1}}</p>
        <p>{{$produto2}}</p>
        <p>{{$produto3}}</p>
        <p>{{$produto4}}</p>

    </div>

    <div>
        <h2>Descrição do Recibo:</h2>
        <p>{{$description}}</p>
    </div>

    <h2>Data: <span>12/12/2024</span></h2>

    <h2>Emissor: <span>Congregação da Missão Província do Sul Seminário Vicentino Nossa Senhora das Graças </span> - <strong>CNPJ:76535665000161</strong></h2>

    <div>
        <h2>Assinatura: </h2>
        <p>____________________________</p>
    </div>
</body>

</html>

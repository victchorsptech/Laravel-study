<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando Laravel</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <H1>Teste</H1>

{{--     O blade permite usar algumas funções que HTML comum não permite. exemplo: --}}
    @if(10>5)
        <p>Acabei de entrar num if feito em html</p>
    @endif

        <p>Ola {{$nome}}, seu nome foi escrito através de uma var que veio de routes</p>
        <p>Sua idade é {{$idade}} anos e você trabalha com {{$trabalho}}</p>


</body>
</html>



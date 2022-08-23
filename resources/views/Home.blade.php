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

{{--     O blade também permite pegar dados e imprimir na tela. Por exemplo:
    As variáveis a seguir foram criadas em routes/web.php, e estmoas utilizando-as aqui
    através da chave que foi passada n arry associativa.
    Para usar um var no html.blade, é necessário o uso de {{}} e dentro você coloca o 
    nome da chave que recebe o dado; --}}
        <p>Ola {{$name}}, seu nome foi escrito através de uma var que veio de routes</p>
        <p>Sua idade é {{$idade}} anos e você trabalha com {{$trabalho}}</p>

            {{-- Acessando dados de dentro de um arry --}}
        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
        @endfor

        {{-- Executar puro php --}}
        @php
        $name = "Vitão";
        echo $name;
        @endphp


</body>
</html>



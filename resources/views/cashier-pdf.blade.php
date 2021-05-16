<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/pdf.css">

    <title>RELATÓRIO DE CAIXA</title>
</head>

<body>

    @foreach($cashier as $cash)

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Receita:</h5>
               <p class="card-text">R$ {{$total_value}},00</p>
        </div>
    </div>

    @if(count((array)$total_value) === 1)
    @break
    @endif

    @endforeach

        <table>
            <thead>
                <tr>
                    <th><p class="pth">Cliente</p></th>
                    <th><p class="pth">Valor</p></th>
                </tr>
            </thead>

            <tbody>
            @foreach($cashier as $cash)

            <tr>
            <td><p class="ptd">{{$cash->name}}</p></td>
            <td ><p class="ptd">{{$cash->value}}</p></td>
            </tr>

            @endforeach

            </tbody>
        </table>

</body>

</html>

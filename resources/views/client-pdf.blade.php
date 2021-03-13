<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Clientes</title>
</head>

<body>

    <h1 style="border-bottom: 1px solid #ccc; margin-bottom: 30px;">CLIENTES</h1>


    @foreach($clients as $client)

    <h2>{{$client->id}}</h2>
    <h2>{{$client->name}}</h2>


    @endforeach

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELATÓRIO DE USUÁRIOS</title>
</head>

<body>

    <h1 style="border-bottom: 1px solid #ccc; margin-bottom: 30px;">USUÁRIOS</h1>


    @foreach($users as $user)

    <h2>{{$user->id}} - {{$user->name}}</h2>
    <h2>{{$user->emai}}</h2>

    @endforeach

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Email</title>
</head>
<body>

    <h4>{{$details['title']}}</h4>
    <br>
    <p>{{$details['body']}}</p>

    <p><a href="{{ route('recovery') }}"> Link </a></p>

</body>
</html>

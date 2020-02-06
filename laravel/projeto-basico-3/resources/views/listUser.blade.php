<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhe do Usuário</title>
</head>
<body>
<a href="{{ route('user.index') }}">Voltar</a>
<h1> {{ $user->name }}</h1>
<p>  {{ $user->email }}</p>
<p> {{ date('d/m/Y H:i', strtotime($user->created_at)) }}</p>
</body>
</html>

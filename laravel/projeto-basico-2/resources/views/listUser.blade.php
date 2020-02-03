<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detalhe do Usuário</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h1>{{ $user->name }}</h1>
<p> {{ $user->email }}</p>
<!-- Converte a data do banco para o formato correto. -->
<p> {{ date('d/m/Y H:i', strtotime($user->created_at)) }}</p>
<a href="{{ route('users.listAll') }}">Voltar</a>
</body>
</html>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel de administração</title>
</head>
<body>
        <h1>Painel de administração</h1>
        <p>Bem vindo: {{ $user->name }}</p>
        <p>Seu e-mail: {{ $user->email }}</p>

        <a href="{{ route('admin.logout') }}">Logout</a>
</body>
</html>

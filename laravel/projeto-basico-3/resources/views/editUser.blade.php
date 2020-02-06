<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detalhe do Usuário</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edição do Usuário</title>
</head>
<body>

<!-- Passamos o nome da rota, para que a URL seja uma URL dinamica. -->
<form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
    <!-- o csrf cria uma proteção para o formulário, assim garantindo que não seja um formulário externo. -->
@csrf
<!-- Para o Laravel entender que o método que queremos é um PUT ao invés de post. -->
    @method('put')
    <label for="">Nome do Usuário: </label>
    <input type="text" name="name" value="{{ $user->name }}"/>

    <label for="">Email do Usuário: </label>
    <input type="email" name="email" value="{{ $user->email }}"/>

    <label for="">Senha do Usuário: </label>
    <input type="password" name="password"/>

    <input type="submit" value="Editar Usuário"/>
</form>


</body>
</html>

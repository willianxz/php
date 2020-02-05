<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listagem de Usuários</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<a href="{{ route('users.formAddUser') }}"><input type="button" value="CADASTRAR NOVO USUÁRIO"/></a>
<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Ações</td>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users.list', ['user' => $user->id]) }}">Ver Usuário</a>
            <form action="{{ route('users.destroy', ['user' => $user->id]) }}}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="user" value="{{ $user->id }}}"/>
                <input type="submit" value="Remover"/>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
